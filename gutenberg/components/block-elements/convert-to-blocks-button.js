/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;
const { ToolbarButton } = wp.components;
const { useDispatch, useSelect } = wp.data;
const { rawHandler, serialize } = wp.blocks;
const { store } = wp.blockEditor;

const ConvertToBlocksButton = ( { clientId } ) => {
	const { replaceBlocks } = useDispatch( store );
	const block = useSelect(
		( select ) => {
			return select( store ).getBlock( clientId );
		},
		[ clientId ]
	);

	return (
		<ToolbarButton
			onClick={ () =>
				replaceBlocks(
					block.clientId,
					rawHandler( { HTML: serialize( block ) } )
				)
			}
		>
			{ __( 'Convert to blocks' ) }
		</ToolbarButton>
	);
};

export default ConvertToBlocksButton;