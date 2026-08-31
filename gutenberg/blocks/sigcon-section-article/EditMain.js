import TrDefaultFieldsHandler from '../../components/block-elements/TrDefaultFieldsHandler'
const {
  useBlockProps,
  RichText,
  AlignmentToolbar,
  BlockControls
} = wp.blockEditor
const { ToolbarGroup, ToolbarButton } = wp.components

const EditMain = props => {
  const { className } = props

  return (
    <div className={`${className}`}>
      <TrDefaultFieldsHandler data={{ ...props }} />
    </div>
  )
}

export default EditMain
