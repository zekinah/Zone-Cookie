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
$zn_ccpa_content = $tbl_content[0]['Ccpa_Page_Content'];
$zn_form_nonce = wp_create_nonce('zn_form_nonce');
?>
<h2>California Compliance: California Consumer Privacy Act (CCPA)</h2>
<div class="row">
    <div class="col-md-9">
        <div class="card mb-3">
            <h2>Page Content</h2>
            <div class="card-body">
                <?php
                $settings_ccpa = array(
                    'teeny' => true,
                    'textarea_rows' => 14,
                    'tabindex' => 1,
                    'editor_height' => 500
                );
                wp_editor($zn_ccpa_content, 'zn_ccpa_content', $settings_ccpa);
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="form">
                <div class="form-group">
                    <label><strong>CCPA Content Shortcode</strong></label>
                    <input class="form-control txt-shortcode" type="text" value="[zone-ccpa-content]" readonly>
                </div>
                <div class="form-group">
                    <label><strong>Request Form Shortcode</strong></label>
                    <input class="form-control txt-shortcode" type="text" value="[zone-compliance-form]" readonly>
                </div>
            </div>
            <button id="btn-save-ccpa-content" type="button" class="btn btn-save-settings  mb-3">Save Changes</button>
            <button id="btn-restore-content" data-zn_nonce="<?= $zn_form_nonce ?>" type="button" class="btn btn-default  mb-3">Restore Content</button>
        </div>
    </div>
</div>