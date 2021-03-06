<?php
if (!defined('ABSPATH')) exit('No direct access allowed');
global $farsDateSetting;
?>
<div class="wrap">
    <h3>
        <?php
        _e('Fars Date Setting', 'fars-date');
        ?>

    </h3>
    <form method="post" action="options.php">
        <?php settings_fields('fars-date-setting'); ?>
        <?php do_settings_sections('fars-date-setting'); ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Method of converting numbers to Persian', 'fars-date') ?></th>
                    <td>
                        <fieldset>
                            <label><input type="radio" name="num2fa-enable" value="0" <?= get_option('num2fa-enable') == '0' ? 'checked' : '' ?>>
                                <span><?php _e('Don\'t convert numbers', 'fars-date') ?></span></label><br>
                            <label><input type="radio" name="num2fa-enable" value="1" <?= get_option('num2fa-enable') == '1' ? 'checked' : '' ?>>
                                <span><?php _e('javascript', 'fars-date') ?> <small><?php _e('(in some themes this type may convert numbers with a little delay)', 'fars-date') ?></small></span></label><br>
                            <label><input type="radio" name="num2fa-enable" value="2" disabled <?= get_option('num2fa-enable') == '2' ? 'checked' : '' ?>>
                                <span><?php _e('PHP', 'fars-date') ?> <small><?php _e('(Only availble in Pro version)', 'fars-date') ?></small></span></label><br>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('Places of numbers to Convert to Persian', 'fars-date') ?></th>
                    <td>
                        <fieldset>
                            <label>
                                <input name="num2fa-all" type="checkbox" value="1" <?= get_option('num2fa-all') == '1' ? 'checked' : '' ?>>
                                <?php _e('Convert All numbers in every where to persian', 'fars-date') ?> <small><?php _e('Makes below options ineffective', 'fars-date') ?></small>
                            </label><br>
                            <label>
                                <input name="num2fa-navbar" type="checkbox" value="1" <?= get_option('num2fa-navbar') == '1' ? 'checked' : '' ?>>
                                <?php _e('Top Nav bar', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="num2fa-sidebar" type="checkbox" value="1" <?= get_option('num2fa-sidebar') == '1' ? 'checked' : '' ?>>
                                <?php _e('Sidebar', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="num2fa-post" type="checkbox" value="1" <?= get_option('num2fa-post') == '1' ? 'checked' : '' ?>>
                                <?php _e('Post/Pages content', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="num2fa-post-title" type="checkbox" value="1" <?= get_option('num2fa-post-title') == '1' ? 'checked' : '' ?>>
                                <?php _e('Post/Page Title', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="num2fa-post-meta" type="checkbox" value="1" <?= get_option('num2fa-post-meta') == '1' ? 'checked' : '' ?>>
                                <?php _e('Post/Page Meta', 'fars-date') ?> <small><?php _e('(descaription, date, auther)', 'fars-date') ?></small>
                            </label> <br>
                            <label>
                                <input name="num2fa-comment" type="checkbox" value="1" <?= get_option('num2fa-comment') == '1' ? 'checked' : '' ?>>
                                <?php _e('Comments', 'fars-date') ?>
                            </label> <br>
                            <label>
                                <input name="num2fa-code-convert" type="checkbox" value="1" <?= get_option('num2fa-code-convert') == 1 ? 'checked' : '' ?>>
                                <?= esc_html(__('<code> and <pre>', 'fars-date')) ?> <small><?php _e('(converts numbers in code and pre tag)', 'fars-date') ?></small>
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Method of converting Dates to Jalali', 'fars-date') ?></th>
                    <td>
                        <fieldset>
                            <label><input type="radio" name="fd-date-enable" value="0" <?= get_option('fd-date-enable') == '0' ? 'checked' : '' ?>>
                                <span><?php _e('Don\'t convert Dates', 'fars-date') ?></span></label><br>
                            <label><input type="radio" name="fd-date-enable" value="1" <?= get_option('fd-date-enable') == '1' ? 'checked' : '' ?>>
                                <span><?php _e('javascript', 'fars-date') ?> <small><?php _e('(in some themes this type may convert dates with a little delay)', 'fars-date') ?></small></span></label><br>
                            <label><input type="radio" name="fd-date-enable" value="2" disabled <?= get_option('fd-date-enable') == '2' ? 'checked' : '' ?>>
                                <span><?php _e('PHP', 'fars-date') ?> <small><?php _e('(Only availble in Pro version)', 'fars-date') ?></small></span></label><br>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Date convert options', 'fars-date') ?></th>
                    <td>
                        <fieldset>
                            <label>
                                <input name="fd-date-post" type="checkbox" value="1" <?= get_option('fd-date-post') == '1' ? 'checked' : '' ?>>
                                <?php _e('Convert date in post/page meta', 'fars-date') ?>
                            </label><br>
                            <label>
                                <input name="fd-date-comment" type="checkbox" value="1" <?= get_option('fd-date-comment') == '1' ? 'checked' : '' ?>>
                                <?php _e('Convert dates in comments', 'fars-date') ?>
                            </label><br>
                        </fieldset>
                    </td>

                </tr>


            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php

?>