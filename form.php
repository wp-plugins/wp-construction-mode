<style>
    .wrap{
        padding: 20px;
        background-color: #4c4f53;
        background: -webkit-linear-gradient(130deg, rgba(75, 60, 80, 0) 60%, #4a434f 100%) 0 0 fixed, -webkit-linear-gradient(top, #83a7ab 0%, #23263c 100%) 0 0 fixed;
        background: linear-gradient(130deg, rgba(75, 60, 80, 0) 60%, #4a434f 100%) 0 0 fixed, linear-gradient(to bottom, #83a7ab 0%, #23263c 100%) 0 0 fixed;
        background-size: 100% 1800px, 1400px 1400px, 1600px 1600px, 100% 100%, 100% 100%, 100% 100%;
        font-family: calibri;
    }
    #poststuff{
        
    
    }
    .construction-form{
        padding: 20px;
    }
    .construction-form .title label{
        color: #ffffff;
    }
    .construction-form select{
        padding: 5px 8px;
        border-radius: 15px;
    }
    .construction-form textarea{
        border-radius: 15px;
        padding: 20px;
    }
    .plugin-title{
        color: #ffffff;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #ffffff;
        padding: 10px 0;
        width: 80%;
    }
</style>
    

<div class="wrap">
    <div class="icon32" id="icon-edit-pages"></div>
    

    <div id="poststuff" width="65%" class="alignleft">
        <h1 class="plugin-title">WP Construction / Maintenance Mode</h1>
        <div id="post-body">
            <div id="post-body-content" class="form-wrap">
                <form name="post_form" class="construction-form" method="post" action="" enctype="multipart/form-data">
                    <div id="titlediv">
                        <div class="form-field title">
                            <label for="title"><?php _e('Set Under Construction') ?></label>
                            <select name="set_opt" id="set_opt">
                                <option value="No" <?php echo ($set_opt == 'No') ? 'selected=selected' : ''; ?>>No</option>
                                <option value="Yes" <?php echo ($set_opt == 'Yes') ? 'selected=selected' : ''; ?>>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div id="titlediv">
                        <div class="form-field title">
                            <label for="title"><?php _e('Set To Specific Page') ?>  </label>
                            <select name="set_page" id="set_page">
                                <option value="all"><?php _e('Entire Website') ?></option>
                                <?php
                                $pages = get_pages();
                                foreach($pages as $page){
                                    $option = "<option value= '" . $page->ID . "'";
                                    if(get_option("set_page")== $page->ID)
                                        $option .= "selected";
                                    $option .= ">";
                                    $option .= $page->post_title;
                                    $option .= '</option>';
                                    echo $option;
                                }
                                ?>

                            </select>
                        </div>
                    </div>  
                    <div id="titlediv">
                        <div class="form-field title">
                            <label for="title"><?php _e('Message') ?></label>
                            <textarea name="set_msg" id="set_msg" cols="20" rows="3" style="width: 50%"><?php echo $set_msg; ?></textarea>
                        </div>
                    </div>
                    <div style="margin-top:15px;">
                        <input type="submit" name="submit" value="Submit" class="button button-primary" />
                        <input type="hidden" name="act" value="save" />
                </form>

            </div>

        </div>

    </div>  

</div>
        <div class="alignleft" style="width: 30%;background:#edeae6 ">
        <h2 style="color: #B0CB1F;background: #414141;text-align: center;padding: 10px 0;margin-top: 10px;">Plugin Details</h2>
        <p style="text-align: center;padding: 10px">
            <?php _e("Use this plugin to set your entire website or specific pages offline for anyone who is not an admin.")?>
            <br>
            <?php _e("This is perfect for building a site on a live domain, or if you want to make changes on a page on a live site, you can set the specific page offline")?>
            <br>
            <?php _e("Set your own custom message. Future updates will allow for more customization. To request specific changes, please visit my website and submit your feedback")?>
        </p>
        <p style="text-align: center">
            <a href="http://smartcatdesign.net/under-construction-maintenance-mode-free-wordpress-plugin/" target="_blank" class="button button-primary">Plugin Site</a>
        </p>
        <p style='text-align: center'>
            <img src='http://smartcatdesign.net/wp-content/uploads/2013/03/logo-medium.png' style="max-width: 100%"/>
        </p>
    </div> 