<?php
class GallerySection extends Section
{
    /**
    * Many_many relationship
    * @return array
    */
    private static $many_many = array(
        'Images' => 'Image'
    );

    private static $many_many_extraFields = array(
        'Images' => array(
            'SortOrder' => 'Int'
        )
    );

    /**
     * CMS Fields
     * @return array
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            "Root.Main",
            array(
                SortableUploadField::create(
                    'Images',
                    'Current Image(s)'
                )
            )
        );
        return $fields;
    }
}
