/**
 * schedule.js: Functions to build the schedule programatically via the provided
 * /prod/global/vendor/sigdoc-schedule.csv file.
 * Important @params
 * -- /prod/global/vendor/sigdoc-schedule.csv
 * @return
 * -- Rendered HTML of schedule data that is searchable via searchbar
 */

// Show an element
const show = (elem) => {
	const getHeight = () => {
		elem.style.display = 'grid'
		let height = elem.scrollHeight + 'px'
		elem.style.display = ''
		return height
	}

	let height = getHeight() // Get the natural height
	elem.classList.add('is-visible') // Make the element visible
	elem.style.height = height // Update the max-height

	// Once the transition is complete, remove the inline max-height so the content can scale responsively
	window.setTimeout(function () {
		elem.style.height = ''
	}, 350)

}

// Hide an element
const hide = (elem) => {
	// Give the element a height to change from
	elem.style.height = elem.scrollHeight + 'px'

	// Set the height back to 0
	window.setTimeout(function () {
		elem.style.height = '0'
	}, 1)

	// When the transition is complete, hide it
	window.setTimeout(function () {
		elem.classList.remove('is-visible')
		elem.style.display = 'none'
	}, 350)

}

/**
 * TODO: show/hide any schedule__session class containers
 * - .is-visible if presentation exists ()
 * - Hide if no presentations
*/


const toggleVisibility = (e) => {
	let className = ".stage_container__"+(e.target.offsetParent.attributes.id.nodeValue).split("__")[1]
	className = className.replaceAll("'", "")
	className = className.replaceAll("&_", "")
	className = className.replaceAll("/", "")
	const element = document.querySelector(className)

	if (element.style.display === "none") {
			element.style.display = "grid"
			element.setAttribute('aria-expanded', "true")
			show(element)
	} else {
			element.setAttribute('aria-expanded', "false")
			hide(element)
	}
}

const groupingRoomData = async (perDayPerSession, roomKey) => {
	const dayKeys = Object.keys(perDayPerSession)
	const perRoom = {}
	dayKeys.forEach((dayKey) => {
		const keys = Object.keys(perDayPerSession[dayKey])
		keys.forEach((key) => {
			if (Array.isArray(perDayPerSession[dayKey][key]) == true) {
				perRoom[key] = {}
				let roomResult = {}
				roomResult = perDayPerSession[dayKey][key].reduce( (r, a) => {
						r[a[roomKey]] = r[a[roomKey]] || []
						r[a[roomKey]].push(a)
						return r
				}, Object.create(null))
				perRoom[key] = roomResult
			}
		})
	})
	return {pdps: perDayPerSession, room: perRoom}
}

const writeDaySessions = async (perDayPerSession, perRoom) => {
	// Presentation Card Total
	let presCardsEntireSum = 0

	// Parse Days
	const keys = Object.keys(perDayPerSession)
	keys.forEach((key) => {

		// Append Day Container
		let dayDate = key
		const container = document.getElementById("schedule__container")
		let dayContainer = document.createElement('div')
		dayContainer.id = dayDate
		dayContainer.className = "schedule__day_container"
		container.appendChild(dayContainer)

		// Day heading h3
		let dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
		let dateH3 = new Date(Date.parse(dayDate))
		let dh3 = document.createElement('h3')
		dh3.className = "day__title"
		dh3.innerHTML = dateH3.toLocaleDateString("en-US", dateOptions)
		dayContainer.appendChild(dh3)

		// Day Toggle Button
		// let dayToggleButton = document.createElement('button')
		// dayToggleButton.id = "toggleButton-"+dayDate
		// dayToggleButton.className = "expand_more__button"
		// dayToggleButton.setAttribute('role','button')
		// // Button Content
		// let buttonDateOptions = { weekday: 'long' };
		// let dateButton = new Date(Date.parse(dayDate))
		// dayToggleButton.innerHTML = "Toggle "+dateButton.toLocaleDateString("en-US", buttonDateOptions)+"\'s Sessions"
		// // dayToggleButton.addEventListener("click", (e) => {
		// // 	toggleVisibility(e)
		// // })
		// // Append 4 spans for effect
		// for (let s=0; s<4; s++) {
		// 	let expandSpan = document.createElement('span')
		// 	dayToggleButton.appendChild(expandSpan)
		// }
		// // Append 4 bmasks for effect
		// for (let b=0; b<4; b++) {
		// 	let expandB = document.createElement('b')
		// 	expandB.innerHTML = "Toggle "+dateButton.toLocaleDateString("en-US", buttonDateOptions)+"\'s Sessions"
		// 	expandB.setAttribute('aria-hidden','true')
		// 	dayToggleButton.appendChild(expandB)
		// }
		// dayContainer.appendChild(dayToggleButton)

		// Day sessions wrapper
		let sessionsWrapper = document.createElement('div')
		sessionsWrapper.id = "sessions-"+dayDate
		sessionsWrapper.className = "schedule__session_type_wrapper"
		dayContainer.appendChild(sessionsWrapper)
		// Parse Sessions
		let dayKeys = Object.keys(perDayPerSession[key])
		dayKeys.forEach((sessionType) => {
			/**
			 - section.schedule__session
				- div.schedule__session_title.js-expandmore
					- h4
					- p
				- div.schedule__stage_guide-container.js-to_expand
					- div.guide-slot
			*/
			// Per Session (schedule__session)
			let sessionsContainer = document.createElement('section')
			sessionsContainer.className = "schedule__session"
			sessionsWrapper.appendChild(sessionsContainer)

			// Session title container (schedule__session_title)
			let sessionsTitleContainer = document.createElement('div')
			sessionsTitleContainer.className = "schedule__session_title"
			// Append session name to session container as ID
			sessionsContainer.id = "schedule__session"+"--"+sessionType.replaceAll(" ", "_").toLowerCase()
			sessionsContainer.appendChild(sessionsTitleContainer)

			// Session Title h4
			let dh4 = document.createElement('h4')
			dh4.innerHTML = sessionType
			sessionsTitleContainer.appendChild(dh4)

			// Room Container (schedule__stage_guide-container)
			let roomContainer = document.createElement('div')
			roomContainer.setAttribute('style', 'display:none;height:0;opacity: 0;transition:height 350ms ease-in-out, opacity 750ms ease-in-out;')
			let stageContainerName = "stage_container__"+sessionType.replaceAll(" ", "_").toLowerCase()
			stageContainerName = stageContainerName.replaceAll("'", "")
			stageContainerName = stageContainerName.replaceAll("/", "")
			stageContainerName = stageContainerName.replaceAll("&_", "")
			roomContainer.className = "schedule__stage_guide-container "+stageContainerName+" is-visible"
			sessionsContainer.appendChild(roomContainer)

			// Time
			let timeString = perDayPerSession[key][sessionType][0].time
			let startTime = (timeString.match(/^(\d+)/)[1])
			let endTime = (timeString.match(/-(\d+)/)[1]).replace('-', '')
			let startHour = startTime.slice(0,2)
			let endHour = endTime.slice(0,2)
			let startMin = startTime.slice(-2)
			let endMin = endTime.slice(-2)
			let numStartHour = Number(startHour)
			let numStartMin = Number(startMin)
			let numEndHour = Number(endHour)
			let numEndMin = Number(endMin)
			let fullTimeString = ""
			// START PM
			if (numStartHour > 12) { numStartHour = numStartHour-12 }
			// END PM
			if (numEndHour > 12) { numEndHour = numEndHour-12 }
			// Handle Minutes
			if (numStartMin == 0) { numStartMin = "00" }
			if (numEndMin == 0) { numEndMin = "00" }
			fullTimeString = (
				numStartHour.toString() + ':' + numStartMin.toString()
				+ "-" + numEndHour.toString() + ':' + numEndMin.toString()
			)
			let sessTimePara = document.createElement('p')
			sessTimePara.className = "time session_time"
			sessTimePara.innerHTML = fullTimeString
			sessionsTitleContainer.appendChild(sessTimePara)

			// Expand button
			// let expandButton = document.createElement('button')
			// expandButton.id = "button_toggle__"+sessionType.replaceAll(" ", "_").toLowerCase()
			// expandButton.className = "expand_more__button"
			// expandButton.setAttribute('role','button')
			// expandButton.setAttribute('tabindex','0')
			// expandButton.innerHTML = "Toggle Sessions"
			// expandButton.addEventListener("click", (e) => {
			// 	toggleVisibility(e)
			// })
			// // Append 4 spans for effect
			// for (let s=0; s<4; s++) {
			// 	let expandSpan = document.createElement('span')
			// 	expandButton.appendChild(expandSpan)
			// }
			// // Append 4 bmasks for effect
			// for (let b=0; b<4; b++) {
			// 	let expandB = document.createElement('b')
			// 	expandB.innerHTML = "Toggle Sessions"
			// 	expandB.setAttribute('aria-hidden','true')
			// 	expandButton.appendChild(expandB)
			// }
			// sessionsTitleContainer.appendChild(expandButton)

			let perRoomKeys = Object.keys(perRoom[sessionType])
			let presCardsPerSession = 0
			// Room Presentations
			perRoomKeys.forEach((roomKey) => {
				// Per Room
				let room = document.createElement('div')
				room.className = "guide-slot"
				roomContainer.appendChild(room)
				// Room name h5
				let roomNameH5 = document.createElement('h5')
				roomNameH5.className = "room"
				roomNameH5.innerHTML = roomKey
				room.appendChild(roomNameH5)
				// Check for panel theme, if there append it below the title
				if (perRoom[sessionType][roomKey][0].theme.length > 0) {
					let themeP = document.createElement('p')
					themeP.className = "room_theme"
					themeP.innerHTML = perRoom[sessionType][roomKey][0].theme
					room.appendChild(themeP)
				}
				// Append moderator, if value not empty
				if (perRoom[sessionType][roomKey][0].moderator.length > 0) {
					let moderatorNameSPAN = document.createElement('span')
					moderatorNameSPAN.className = "fw__400"
					moderatorNameSPAN.innerHTML = perRoom[sessionType][roomKey][0].moderator

					let moderatorNameP = document.createElement('p')
					moderatorNameP.className = "room_theme"
					moderatorNameP.innerHTML = "Moderator: "
					moderatorNameP.appendChild(moderatorNameSPAN)
					room.appendChild(moderatorNameP)
				}

				// Append presentations
				let presCardsPerRoom = 0
				perRoom[sessionType][roomKey].forEach((presentation) => {
					// Add presentation total
					presCardsEntireSum = presCardsEntireSum+1
					presCardsPerSession = presCardsPerSession+1
					presCardsPerRoom = presCardsPerRoom+1

					// Slot Cards
					let presentationCard = document.createElement('div')
					presentationCard.className = "guide-slot_card"
					room.appendChild(presentationCard)

					// Add remote presentation link, if available
					if (presentation.remote == "FALSE" && presentation.ignite == "FALSE" && presentation.keynote == "FALSE") {
						// Append presentation content to card
						let presTitleH6 = document.createElement('h6')
						presTitleH6.innerHTML = presentation.titles
						presentationCard.appendChild(presTitleH6)
					} 
					else if (presentation.remote == "TRUE") {
						let remotePresAnchor = document.createElement('a')
						remotePresAnchor.href = presentation.remote_url
						remotePresAnchor.target = "_blank"
						remotePresAnchor.rel = "nooppenner noreferrer"
						// Append presentation content to card
						let presTitleH6 = document.createElement('h6')
						presTitleH6.innerHTML = presentation.titles
						remotePresAnchor.appendChild(presTitleH6)
						presentationCard.appendChild(remotePresAnchor)
					}
					// Add IGNITE page link, if available
					else if (presentation.ignite == "TRUE") {
						let ignitePresAnchor = document.createElement('a')
						ignitePresAnchor.href = presentation.ignite_url
						// Append presentation content to card
						let presTitleH6 = document.createElement('h6')
						presTitleH6.innerHTML = presentation.titles
						ignitePresAnchor.appendChild(presTitleH6)
						presentationCard.appendChild(ignitePresAnchor)
					}
					// Add KEYNOTE page link, if available
					else if (presentation.keynote == "TRUE") {
						let keynotePresAnchor = document.createElement('a')
						keynotePresAnchor.href = presentation.keynote_url
						// Append presentation content to card
						let presTitleH6 = document.createElement('h6')
						presTitleH6.innerHTML = presentation.titles
						keynotePresAnchor.appendChild(presTitleH6)
						presentationCard.appendChild(keynotePresAnchor)
					} 
					
					// Append presenters
					let presenterNamesP = document.createElement('p')
					presenterNamesP.className = "presenters"
					presenterNamesP.innerHTML = presentation.presenters
					presentationCard.appendChild(presenterNamesP)
					
				})
				// Append cards per room
				room.dataset.presentationCount = String(presCardsPerRoom)
				room.dataset.currentCount = String(presCardsPerRoom)
			})
			// Append cards per session
			sessionsContainer.dataset.presentationCount = (presCardsPerSession)
			sessionsContainer.dataset.presentationCount = (presCardsPerSession)
			roomContainer.dataset.presentationCount = (presCardsPerSession)
			roomContainer.dataset.currentCount = (presCardsPerSession)

		})

		// let dayDivider = document.createElement('hr')
		// dayDivider.className = 'divider'
		// container.appendChild(dayDivider)
	})

}

const groupingDayData = async (data, sessionKey) => {
	const keys = Object.keys(data)
	const perSession = {}
	keys.forEach((key) => {
		if (Array.isArray(data[key]) == true) {
			perSession[key] = {}
			let dayResult = {}
			dayResult = data[key].reduce( (r, a) => {
					r[a[sessionKey]] = r[a[sessionKey]] || []
					r[a[sessionKey]].push(a)
					return r
			}, Object.create(null))
			perSession[key] = dayResult
		}
	})
	return perSession
}

const groupingData = async (data, dayKey) => {
	const result = data.reduce( (r, a) => {
			r[a[dayKey]] = r[a[dayKey]] || []
			r[a[dayKey]].push(a)
			return r
	})
	return result
}

const createSchedule = async (sd) => {
	// GROUPBY DAYS
	await groupingData(sd, "date").then(async (perDay) => {
		// GROUPBY SESSIONS
		await groupingDayData(perDay, "session").then(async (perDayPerSession) => {
			// GROUPBY ROOMS
			await groupingRoomData(perDayPerSession, "room").then(async (d) => {
				await writeDaySessions(d.pdps, d.room)
			})
		})
	})

}

const getData = (fp) => {
  return new Promise((resolve, reject) => {
		Papa.parse(fp, {
			download: true,
			header: true,
			complete: async (result) => {
				try {
					if (result) {
						return resolve(result.data)
					} else {
						return reject()
					}
				} catch (e) {
					console.info(e)
				}
			}
		})
	})
}

// Start building the schedule
(async function () {
	await getData(tr_theme_url+"/prod/global/vendor/sigdoc-schedule.csv")
		.then(async (result) => {
			if (result) {
				const scheduleData = result
				createSchedule(scheduleData)
			}
		})
})()