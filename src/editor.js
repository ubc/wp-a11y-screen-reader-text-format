import { registerFormatType, toggleFormat } from '@wordpress/rich-text';
import { RichTextToolbarButton } from '@wordpress/block-editor';

const ScreenReaderTextButton = ( { isActive, onChange, value } ) => {
    return (
        <RichTextToolbarButton
            icon="visibility"
            title="Visually Hidden Text"
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
    title: 'Visually Hidden Text',
    tagName: 'span',
    className: 'wp-a11y-visually-hidden',
    edit: ScreenReaderTextButton,
} );