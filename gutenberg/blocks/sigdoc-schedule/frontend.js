
const groupingRoomData = async (perDayPerSession, roomKey) => {
	const dayKey = Object.keys(perDayPerSession)[0]
	const keys = Object.keys(perDayPerSession[dayKey])
	const perRoom = {}
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
	return {pdps: perDayPerSession, room: perRoom}
}

const writeDaySessions = async (perDayPerSession, perRoom) => {

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

		// Day sessions wrapper
		let sessionsWrapper = document.createElement('div')
		sessionsWrapper.className = "schedule__session_type_wrapper"
		dayContainer.appendChild(sessionsWrapper)
		console.log(perDayPerSession[key])
		// Parse Sessions
		let dayKeys = Object.keys(perDayPerSession[key])
		dayKeys.forEach((sessionType) => {
			// Per Session
			let sessionsContainer = document.createElement('section')
			sessionsContainer.className = "schedule__session"
			sessionsWrapper.appendChild(sessionsContainer)
			// Session title container
			let sessionsTitleContainer = document.createElement('div')
			sessionsTitleContainer.className = "schedule__session_title"
			sessionsContainer.appendChild(sessionsTitleContainer)

			// Room Container
			let roomContainer = document.createElement('div')
			roomContainer.className = "schedule__stage_guide-container"
			sessionsContainer.appendChild(roomContainer)
			// Session Title h4
			let dh4 = document.createElement('h4')
			dh4.innerHTML = sessionType
			sessionsTitleContainer.appendChild(dh4)

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
			if (numStartHour > 12) {
				numStartHour = numStartHour-12
			}
			// END PM
			if (numEndHour > 12) {
				numEndHour = numEndHour-12
			}
			// Handle Minutes
			if (numStartMin == 0) {
				numStartMin = "00"
			}
			else if (numEndMin == 0) {
				numEndMin = "00"
			}
			fullTimeString = (
				numStartHour.toString() + ':' + numStartMin.toString()
				+ "-" + numEndHour.toString() + ':' + numStartMin.toString()
			)
			let sessTimePara = document.createElement('p')
			sessTimePara.className = "time"
			sessTimePara.innerHTML = fullTimeString
			sessionsTitleContainer.appendChild(sessTimePara)

			let perRoomKeys = Object.keys(perRoom[sessionType])
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
				// if (perRoom[sessionType][roomKey][0].theme.length > 0) {
				// 	let themeP = document.createElement('p')
				// 	themeP.className = "room_theme"
				// 	themeP.innerHTML = perRoom[sessionType][roomKey][0].theme
				// 	room.appendChild(themeP)
				// }

				// Append presentations
				perRoom[sessionType][roomKey].forEach((presentation) => {
					// Slot Cards
					let presentationCard = document.createElement('div')
					presentationCard.className = "guide-slot_card"
					room.appendChild(presentationCard)
					// Append presentation content to card
					let presTitleH6 = document.createElement('h6')
					presTitleH6.innerHTML = presentation.titles
					presentationCard.appendChild(presTitleH6)
					// Append presenters
					let presenterNamesP = document.createElement('p')
					presenterNamesP.className = "presenters"
					presenterNamesP.innerHTML = presentation.presenters
					presentationCard.appendChild(presenterNamesP)
				})
			})

		})

		let dayDivider = document.createElement('hr')
		dayDivider.className = 'divider'
		container.appendChild(dayDivider)
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
				console.log(d.pdps)
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

(async function () {
	await getData("./sigdoc-schedule.csv")
		.then(async (result) => {
			if (result) {
				const scheduleData = result
				createSchedule(scheduleData)
			}
		})
})()