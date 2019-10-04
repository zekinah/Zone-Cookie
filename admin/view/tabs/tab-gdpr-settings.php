<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/zekinah/
 * @since      1.0.0
 *
 * @package    Zone_Gdpr
 * @subpackage Zone_Gdpr/admin
 * @author     Zekinah Lecaros <zjlecaros@gmail.com>
 */
?>
<h3>IV. Display Settings</h3>
<div id="actionbutton">
    <button id="openpopup" type="button" class="btn btn-show">Show</button>
    <button id="closepopup" type="button" class="btn btn-close">Close</button>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <!-- POSITION -->
            <h2><i class="fas fa-arrows-alt"></i> Position</h2>
            <div class="card-body">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_position_default" name="zn_position" type="radio" value="default" <?php checked('default', get_option('zn_position')); ?> />
                    <label class="form-check-label" for="zn_position_default">Banner bottom</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_position_top" name="zn_position" type="radio" value="top" <?php checked('top', get_option('zn_position')); ?> />
                    <label class="form-check-label" for="zn_position_top">Banner top</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_position_left" name="zn_position" type="radio" value="bottom-left" <?php checked('bottom-left', get_option('zn_position')); ?> />
                    <label class="form-check-label" for="zn_position_left">Floating left</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_position_right" name="zn_position" type="radio" value="bottom-right" <?php checked('bottom-right', get_option('zn_position')); ?> />
                    <label class="form-check-label" for="zn_position_right">Floating right</label>
                </div>
            </div>
        </div>
        <!-- LAYOUT -->
        <div class="card mb-3">
            <h2><i class="fas fa-eye"></i> Layout</h2>
            <div class="card-body">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_layout_block" name="zn_layout" type="radio" value="default" <?php checked('default', get_option('zn_layout')); ?> />
                    <label class="form-check-label" for="zn_layout_block">Block</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_layout_classic" name="zn_layout" type="radio" value="classic" <?php checked('classic', get_option('zn_layout')); ?> />
                    <label class="form-check-label" for="zn_layout_classic">Classic</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_layout_edgeless" name="zn_layout" type="radio" value="edgeless" <?php checked('edgeless', get_option('zn_layout')); ?> />
                    <label class="form-check-label" for="zn_layout_edgeless">Edgeless</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="zn_layout_wire" name="zn_layout" type="radio" value="" <?php checked('0', get_option('zn_layout')); ?> />
                    <label class="form-check-label" for="zn_layout_wire">Wire</label>
                </div>
            </div>
        </div>
        <!-- PALETTE -->
        <div class="card mb-3">
            <h2><i class="fas fa-palette"></i> Palette</h2>
            <div class="card-body">
                <button id="default_palette" type="button" class="btn btn-show">Use Dafault</button>
                <button id="reset_palette" type="button" class="btn btn-close">Reset</button>
                <p class="card-text">Create your own</p>
                <div class="form-group">
                    <label class="form-check-label">Banner</label>
                    <input class="form-control" id="zn_color_banner" name="zn_color_banner" type="color" data-default-color="#effeff" value="<?= esc_attr(get_option('zn_color_banner')); ?>" />
                </div>
                <div class="form-group">
                    <label class="form-check-label">Banner Text</label>
                    <input class="form-control" id="zn_color_banner_text" name="zn_color_banner_text" type="color" data-default-color="#effeff" value="<?= esc_attr(get_option('zn_color_banner_text')); ?>" />
                </div>
                <div class="form-group">
                    <label class="form-check-label">Button</label>
                    <input class="form-control" id="zn_color_button" name="zn_color_button" type="color" data-default-color="#effeff" value="<?= esc_attr(get_option('zn_color_button')); ?>" />
                </div>
                <div class="form-group">
                    <label class="form-check-label">Button Text</label>
                    <input class="form-control" id="zn_color_button_text" name="zn_color_button_text" type="color" data-default-color="#effeff" value="<?= esc_attr(get_option('zn_color_button_text')); ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <h2><i class="fas fa-user-lock"></i> Compliance Type</h2>
            <div class="card-body">
                <div class="form-check">
                    <input id="zn_compliance_def" name="zn_compliance" type="radio" value="default" <?php checked('default', get_option('zn_compliance')); ?> />
                    <label for="zn_compliance_def">Just tell users that we use cookies</label>
                </div>
                <div class="form-check">
                    <input id="zn_compliance_opt_out" name="zn_compliance" type="radio" value="opt-out" <?php checked('opt-out', get_option('zn_compliance')); ?> />
                    <label for="zn_compliance_opt_out">Let users opt out of cookies (Advanced)</label><br>
                    <small>You tell your users that you use cookies, and give them one button to disable cookies, and another to dismiss the message.</small>
                </div>
                <div class="form-check">
                    <input id="zn_compliance_opt_in" name="zn_compliance" type="radio" value="opt-in" <?php checked('opt-in', get_option('zn_compliance')); ?> />
                    <label for="zn_compliance_opt_in">Ask users to opt into cookies (Advanced)</label><br>
                    <small>You tell your users that you wish to use cookies, and give them one button to enable cookies, and another to refuse them.</small>
                </div>
            </div>
        </div>

    </div>
</div>