<style>

    #gopro{
        width: 100%;
        display: block;
        clear: both;
        padding: 10px;
        margin: 10px 8px 15px 5px;
        border: 1px solid #e1e1e1;
        background: #464646;
        color: #ffffff;
        overflow: hidden;
    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    table.widefat{
        margin-bottom: 15px;
    }
    table.widefat th{
        font-weight: bold;
    }
    table.widefat tr{
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    table.widefat tr:hover{
        /*background: #E6E6E6;*/
    }

    #wrapper input[type='text']{
        width: 80%;
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    #wrapper input[type='text']:focus{
        border: 1px solid #1784c9;
        box-shadow: 0 0 7px #1784c9;
        -moz-box-shadow: 0 0 5px #1784c9;
        -webkit-box-shadow: 0 0 5px #1784c9;
    }
    #wrapper input[type='text'].small-text{
        width: 20%;
    }
    .proversion{
        color: red;
        font-style: italic;
    }
    .choose-progress{
        display: none;
    }
    .sc_popup_mode{
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 100%;
        position: relative;
        top: 2px;
        box-shadow: 0 0 3px #333;
        -moz-box-shadow: 0 0 3px #333;
        -webkit-box-shadow: 0 0 3px #333;
    }

    .sc_popup_mode_off{
        background: #F54412;
    }
    .sc_popup_mode_live{
        background: #84E11F;
    }
    .sc_popup_mode_test{
        background: #FF9717;
    }
    .left{ float: left;}
    .right {float: right;}
    .center{text-align: center;}
    .width70{ width: 70%;}
    .width25{ width: 25% !important;}
    .width15{ width: 15% !important;}
    .width50{ width: 50%;}
    .width100{ width: 100%;}
    .larger{ font-size: larger;}
    .bold{ font-weight: bold;}
    .editcursor{ cursor: text}

    .miniColors-trigger {
        height: 22px;
        width: 22px;
        background: url(<?php echo SC_SOCIAL_SLIDER_PATH; ?>images/trigger.png) center no-repeat;
        vertical-align: middle;
        margin: 0 .25em;
        display: inline-block;
        outline: none;
    }

    .miniColors-selector {
        position: absolute;
        width: 175px;
        height: 150px;
        background: #FFF;
        border: solid 1px #BBB;
        -moz-box-shadow: 0 0 6px rgba(0, 0, 0, .25);
        -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, .25);
        box-shadow: 0 0 6px rgba(0, 0, 0, .25);
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        padding: 5px;
        z-index: 999999;
    }

    .miniColors-selector.black {
        background: #000;
        border-color: #000;
    }

    .miniColors-colors {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 150px;
        height: 150px;
        background: url(<?php echo SC_SOCIAL_SLIDER_PATH; ?>images/gradient.png) center no-repeat;
        cursor: crosshair;
    }

    .miniColors-hues {
        position: absolute;
        top: 5px;
        left: 160px;
        width: 20px;
        height: 150px;
        background: url(<?php echo SC_SOCIAL_SLIDER_PATH; ?>images/rainbow.png) center no-repeat;
        cursor: crosshair;
    }

    .miniColors-colorPicker {
        position: absolute;
        width: 11px;
        height: 11px;
        background: url(<?php echo SC_SOCIAL_SLIDER_PATH; ?>images/circle.gif) center no-repeat;
    }

    .miniColors-huePicker {
        position: absolute;
        left: -3px;
        width: 26px;
        height: 3px;
        background: url(<?php echo SC_SOCIAL_SLIDER_PATH; ?>images/line.gif) center no-repeat;
    }
    .mytr{
        border-bottom: 1px solid #cccccc;
    }
</style>

<div id="wrapper">
    <div id="gopro">
        <div class="left width50">
            <h1><b>SMARTKIT</b></h1>
            <div>
                Lightweight power tools for your WordPress site
            </div>
            <div>
                <!--<em>Why go pro? The pro version allows you to change the widget location to the right side of the screen, and adds different templates to the widget</em>-->
            </div>
        </div>
        <div class="right">
            <!--<a href="http://smartcatdesign.net/wp-construction-mode-pro-wordpress-plugin/" target="_blank" class="button-primary" style="padding: 40px;line-height: 0;font-size: 20px">GO PRO NOW</a>-->
        </div>
    </div>
    <div class="width25 right">
        <p class="width100">
            
        </p>
        <table class="widefat">
            <thead>
            <tr>
                <th><b>Looking for Support?</b> </th>
            </tr>
            <tr>
                <td>
                    If you have any questions, please head to my <a target="_blank" href="http://smartcatdesign.net/support/">website</a>, or use the <a target="_blank" href="http://wordpress.org/plugins/our-team-enhanced/">support forums</a> on WordPress.org. <br><br>
                    If you need priority support, or specific customization, please <a href="http://smartcatdesign.net">contact me.</a>
                </td>
            </tr>
            <tr>
                <td>
                    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSmartcatDesign&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=233286813420319" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe
                </td>
            </tr>
            </thead>
        </table>
    </div>
    
    <div class="width70 left welcome-panel">
        <h2>We're currently working on this section! More features coming in the next update</h2>
    </div>
    <div class="clear"></div>
    
</div>