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
    $title = 'Chemical Reactor';

    $imageDemoName = 'chemicalReactor_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Chemical Reactor is a multi-block construction which processes fluids, most commonly hydrogen and oxygen, and creates outputs. Hydrogen and Oxygen, typically pumped in from the <a href="Electrolyser.php">Electrolyser</a>, create Rocket Fuel. The other simple recipe it can do by default is to make a large amount of bone meal per bone, 5, using a small amount of nitrogen in the process and thereby almost doubling bone meal efficiency. Use the <a href="/AdvancedRocketry/1.12.2/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Chemical Reactor machine block.</p><p>In addition to Rocket Fuel, it accepts item inputs as well, such as adding the airtight seal enchantment to  armor, allowing you a basic space suit\'s tank and vacuum-protection abilities.  <a href="Coils.php".php">Coils</a> and <a href="/Motors.php">Motors</a> can be used to increase speed and efficiency. ';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'crystallizer_block.png';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = '';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
