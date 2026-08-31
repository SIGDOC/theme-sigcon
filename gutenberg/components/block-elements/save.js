/**
 * WordPress dependencies
 */
const { RawHTML } = wp.element;

export default function save( { attributes } ) {
	const { content } = attributes;

	return <RawHTML>{ content }</RawHTML>;
}