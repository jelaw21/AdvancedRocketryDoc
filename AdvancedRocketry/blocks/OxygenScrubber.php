<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = '';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>YOUR TEXT HERE</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
<?php
    $title = 'CO2 Scrubber';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/energyCable_demo.jpg" /><h2 style="text-align: center;">Overview</h2><p>&nbsp;&nbsp;&nbsp;&nbsp;  When placed next to an <a href="OxygenVent.php">Oxygen Vent</a>,  the CO2 scrubber reduces the amount of Oxygen required and increases the power consumption.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/oxygenScrubber_block.png" /><hr>Hardness: 3<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
