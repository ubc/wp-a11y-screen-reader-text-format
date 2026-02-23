import { registerFormatType, toggleFormat } from '@wordpress/rich-text';
import { RichTextToolbarButton } from '@wordpress/block-editor';

const ScreenReaderTextButton = ( { isActive, onChange, value } ) => {
    return (
        <RichTextToolbarButton
            icon="visibility"
            title="Screen Reader Text"
            onClick={ () => {
                onChange(
                    toggleFormat( value, {
                        type: 'wp-a11y/screen-reader-text',
                    } )
                );
            } }
            isActive={ isActive }
        />
    );
};

registerFormatType( 'wp-a11y/screen-reader-text', {
    title: 'Screen Reader Text',
    tagName: 'span',
    className: 'wp-a11y-screen-reader-text',
    edit: ScreenReaderTextButton,
} );