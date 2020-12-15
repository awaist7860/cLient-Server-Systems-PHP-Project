<?php


class SearchModel
{
    protected $ItemID;
    protected $ItemTitle;
    protected $ItemImage;
    protected $ItemDes;

    /**
     * User constructor.
     * @param $dbRow
     */
    public function __construct($dbRow)
    {
        $this->ItemID =$dbRow['ItemID'];
        $this->ItemTitle =$dbRow['ItemTitle'];
        $this->ItemImage =$dbRow['ItemImage'];
        $this->ItemDes =$dbRow['ItemDescription'];

    }

    /**
     * @return mixed
     */

    public function getItemID()
    {
        return $this->ItemID;
    }

    public function getItemTitle()
    {
        return $this->ItemTitle;
    }

    public function getItemImage()
    {
        return $this->ItemImage;
    }
    public function getItemDes()
    {
        return $this->ItemDes;
    }
}