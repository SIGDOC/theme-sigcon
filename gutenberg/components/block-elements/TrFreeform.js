/**
 * WordPress dependencies
 */
const {
  BlockEdit,
	BlockControls,
	BlockIcon,
	useBlockProps,
	store,
} = wp.blockEditor;
const { useSelect } = wp.data;
const {
  Card,
  CardHeader,
  CardBody,
  Flex,
  FlexItem,
	Button,
	Placeholder,
	ToolbarGroup,
	ToolbarButton,
} = wp.components;
const { useState, useRef, RawHTML } = wp.element;
const { __ } = wp.i18n;
import { Icon, classic, yes, visibility } from '@wordpress/icons';

/**
 * Internal dependencies
 */
import { v4 as uuidv4 } from 'uuid'
import trUpdateField from '../../core/trUpdateField'
import TrTooltip from '../TrTooltip'

import ConvertToBlocksButton from './convert-to-blocks-button';
import ModalEdit from './modal';
import save from './save';

export default function TrFreeform( {fieldData} )
  {

  const { field_object, meta, setAttributes } = fieldData
  const [trUniqueID] = useState(uuidv4())

  console.log("TrFreeform field_object:", field_object)
  console.log("TrFreeform meta:", meta, '\n\n')

  const handleChange = (fieldNewValue) => {
    const newValue = { ...field_object }
    newValue.text = fieldNewValue
    return trUpdateField(fieldData, newValue)
  }

	const content = field_object.text;

	const [ isOpen, setOpen ] = useState( false );
	const editButtonRef = useRef( null );

	const canRemove = useSelect(
		( select ) => select( store ).canRemoveBlock( trUniqueID ),
		[ trUniqueID ]
	);

	return (
		<Card
      size="small"
      className={`tr-control tr-freeform-control tr-control-name--${meta.field_name}`}
    >

      <CardHeader size="small">
        <Icon icon={ classic } />
        {__(meta.label)}
        {meta?.help && <TrTooltip help tooltip={meta.help} />}
      </CardHeader>

      <CardBody>

        <div { ...useBlockProps() }>

          { content ? (
            <>
              { canRemove && (
                <Flex
                  className="block-editor-freeform-modal__actions"
                  justify="flex-start"
                  expanded={ false }
                >
                  <FlexItem>
                    <Button
                      variant="primary"
                      clientId={ trUniqueID }
                      ref={ editButtonRef }
                      onClick={ () => setOpen( true ) }
                    >
                      { __( 'Edit' ) }
                    </Button>
                  </FlexItem>
                </Flex>
              ) }

            </>
          ) : (
            <Placeholder
              icon={ <Icon icon={ classic } /> }
              label={ __( 'Classic' ) }
              instructions={ __(
                'Use the classic editor to add content.'
              ) }
            >
              <Button
                variant="primary"
                onClick={ () => setOpen( true ) }
              >
                { __( 'Edit contents' ) }
              </Button>
            </Placeholder>
          ) }

          { isOpen && (
            <ModalEdit
              name="core/freeform"
              // Get and add existing/default content.text
              clientId={trUniqueID}
              content={ content }

              onClose={ () => {
                setOpen( false );
                if ( editButtonRef.current ) {
                  editButtonRef.current.focus();
                }
              } }
              // Needed to add the .text property to access new content
              onChange={ (content) => setAttributes( { [meta.field_name]: { text: content } } ) }
              isSelected={false}
            />
          ) }
        </div>
      </CardBody>
		</Card>
	);
}
