<?php

require_once('Views/template/header.phtml');

$view = new stdClass();
$view->pageTitle = 'Homepage';
//Move as much php code into the php file
//require_once(__DIR__ . '/../Models/AuctionDataSet.php');
require_once(__DIR__ . '/Models/AuctionDataSet.php');//This is mvc
//$AuctionDataSet1 = (new AuctionDataSet())->fetchAllStudents();
require_once(__DIR__ . '/Models/SearchDataset.php');//This is mvc
$SearchDataSet1 = (new SearchDataset())->getAllItems();


$SpecificSearchDataSet = "";

$itemName = "";

if (isset($_POST['searchTextBox'])) {
$itemName = $_POST['searchTextBox'];
$testItem = "Bytecard";

$itemName = preg_replace("#[^0-9a-z]#i", "", $itemName);
//echo '<tr> <td>' . $Search->getItemTitle();
$SearchDataSet = new SearchDataset();
$SpecificSearchDataSet = (new SearchDataset())->getItemTitle($itemName);?>
<div class="container" style="color: #1b1e21">
    <div class="row">
        <?php

        foreach ($SpecificSearchDataSet as $Key => $Search) {?>
            <div class="col-md-3 col-md-6">
                <div class="card text-center">
                    <div class="card-block">
                        <h4>Lot Number <?php echo $Search->getItemID()?></h4>
                    </div>
                    <div class="card-title">
                        <h4><?php echo $Search->getItemTitle()?></h4>
                    </div>
                    <div class="card-text">
                        <p><?php echo $Search->getItemDes()?></p>
                    </div>
                    <div>
                        <?php echo '<img src="images/' . $Search->getItemImage() . ' " alt="" style= width: 258px; height:120px; class="img-fluid" />' ?>
                    </div>
                </div>
            </div>

        <?php }
        }



//$SpecificSearchDataSet1 = (new SearchDataset())->getItemTitle();
//if (isset($_POST['searchButton']))
//{
//    $SpecificSearchDataSet1 = (new SearchDataset())->getItemTitle("Sonair");
//}
//else
//{
//    $SearchDataSet1 = (new SearchDataset())->getAllItems();
//}
require_once('Views/index.phtml');
?>