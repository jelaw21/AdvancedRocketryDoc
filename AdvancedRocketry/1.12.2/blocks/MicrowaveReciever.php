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
    $title = 'Microwave Reciever';

    $imageDemoName = 'microwaveReciever_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Generates power beamed down from Solar satellites placed in orbit.</p>
    <p>To connect a satellite to the Microwave Reciever the satellite chip must be placed in one of the item input hatches built into the structure.  This allows the satellite to track where to send the energy.</p>
    <p>The amount of power generated per tick is directly related to the power generated by linked satellites.</p>
    <p>These satellites must be in orbit around the same planet that the Microwave Reciever is built on otherwise the satellites will be unable to transmit power.</p>
    <p>Even if the Microwave Reciever is turned off or not connected to a satellite, the satellites in orbit will continue to generate power which can be stored on a satellite\'s internal buffer.</p>
    <p>The reciever itself can be toggled on and off using the GUI in the Microwave Reciever control block</p>
    <p>Because of the efficiency of the satellites placed in geosynchronous orbit and their constant view of the sun, the Microwave Receiver can generate a large amount of power, appropriate for the amount of glowstone, redstone, and gold invested into the multiblock and it\'s satellites. It is recommended to have as many input hatches on the multiblock as can fit, so the maximum amount of satellites can be connected to one multiblock reciever.</p>

    <p>Power generated is stored to the Output Plugs built into the structure.</p>
    <p><font color=#CC0000><b>Warning:</b></font> Entities, items, and blocks that happen to be above the Microwave Reciever while in operation will be incinerated!!!</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'microwaveReciever_build1.jpg';
    $descriptionGUI ='<p>The Microwave Reciever is a one block thick multiblock structure where the <font color="#CC0000">red</font> blocks in the image to the left can be made of either Output Plug, Solar Panel, or Item Input Hatches.</p>
    <p>The <font color="#999900">yellow</font> block in the center is where the Microwave Reciever block is placed in the structure.  The remainder of the structure is solar panels.</p>
    <p>Right clicking the Microwave Reciver block should form the multiblock if all the other blocks are in place.</p>'; 
    
    $sidebarImage = 'microwaveReciever_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='<b>Structure Size:</b><br>5x1x5<br><b>Power Generation:</b><br>  Variable';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>