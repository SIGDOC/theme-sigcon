const { Dashicon } = wp.components
import { Icon, classic, yes, visibility, help } from '@wordpress/icons';

const TrTooltip = ({ children, tooltip, help = false, custom = false }) => {

  return (
    <div className={`tr-tooltip ${help ? 'tr-tooltip--help' : ''}`}>
      {!custom ? <Dashicon icon="editor-help" /> : children}
      <div className="tr-tooltip__inner">{tooltip}</div>
    </div>
  )
}

export default TrTooltip
