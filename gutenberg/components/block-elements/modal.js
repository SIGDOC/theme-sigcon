/**
 * WordPress dependencies
 */
const { store } = wp.blockEditor;
const { Modal, Button, Flex, FlexItem } = wp.components;
const { useEffect, useState, RawHTML } = wp.element;
const { __ } = wp.i18n;
const { useSelect } = wp.data;
import { fullscreen } from '@wordpress/icons';
const { useViewportMatch } = wp.compose;

import save from './save';

const ModalAuxiliaryActions = ( { onClick, isModalFullScreen } ) => {
	// 'small' to match the rules in editor.scss.
	const isMobileViewport = useViewportMatch( 'small', '<' );
	if ( isMobileViewport ) {
		return null;
	}

	return (
		<Button
			size="compact"
			onClick={ onClick }
			icon={ fullscreen }
			isPressed={ isModalFullScreen }
			label={
				isModalFullScreen
					? __( 'Exit fullscreen' )
					: __( 'Enter fullscreen' )
			}
		/>
	);
}

const ClassicEdit = ( props ) => {

	const styles = useSelect(
		( select ) => select( store ).getSettings().styles
	);
	useEffect( () => {
		const { baseURL, suffix, settings } = window.wpEditorL10n.tinymce;

		window.tinymce.EditorManager.overrideDefaults( {
			base_url: baseURL,
			suffix,
		} );

		window.wp.oldEditor.initialize( props.id, {
			tinymce: {
				...settings,
				setup( editor ) {
					editor.on( 'init', () => {
						const doc = editor.getDoc();
						styles.forEach( ( { css } ) => {
							const styleEl = doc.createElement( 'style' );
							styleEl.innerHTML = css;
							doc.head.appendChild( styleEl );
						} );
					} );
				},
			},
		} );

		return () => {
			window.wp.oldEditor.remove( props.id );
		};
	}, [] );

	return <textarea { ...props } />;
}

export default function ModalEdit( { clientId, content, onClose, onChange, setAttributes } ) {

	const [ isModalFullScreen, setIsModalFullScreen ] = useState( false );
	const id = `editor-${ clientId }`;

	return (
		<Modal
			title={ __( 'Classic Editor' ) }
			onRequestClose={ onClose }
			shouldCloseOnClickOutside={ false }
			overlayClassName="block-editor-freeform-modal"
			isFullScreen={ isModalFullScreen }
			className="block-editor-freeform-modal__content"
			headerActions={
				<ModalAuxiliaryActions
					onClick={ () =>
						setIsModalFullScreen( ! isModalFullScreen )
					}
					isModalFullScreen={ isModalFullScreen }
				/>
			}
		>
			<ClassicEdit id={ id } defaultValue={ content } />
			<Flex
				className="block-editor-freeform-modal__actions"
				justify="flex-end"
				expanded={ false }
			>
				<FlexItem>
					<Button
						variant="tertiary"
						onClick={ onClose }
					>
						{ __( 'Cancel' ) }
					</Button>
				</FlexItem>
				<FlexItem>
					<Button
						variant="primary"
						onClick={ (content) => {
              // Pass back HTML raw content in the popup modal window
							onChange( window.wp.oldEditor.getContent( id ) );
							onClose();
						}}
					>
						{ __( 'Save' ) }
					</Button>
				</FlexItem>
			</Flex>
		</Modal>
	);
}