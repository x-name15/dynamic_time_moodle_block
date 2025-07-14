<?php
/**
 *
 * @package    block_dynamic_time
 * @copyright  2025
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

class block_dynamic_time extends block_base {
    /**
     * Initialize the block.
     * This is where we set the block's title and other initial properties.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_dynamic_time');
    }

    /**
     * Define the block's content.
     * This is where we set up the HTML that will be displayed in the block.
     * @return stdClass The content
     */
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '
            <div class="dynamic-time-block-container" style="padding: 15px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; text-align: center; margin-bottom: 10px;">
                <p style="font-size: 1.1em; color: #555; margin-bottom: 5px;">' . get_string('labeltime', 'block_dynamic_time') . '</p>
                <div id="moodle-dynamic-time-display" style="font-size: 2em; font-weight: bold; color: #333; min-height: 2.5em; display: flex; justify-content: center; align-items: center;">
                    ' . get_string('loadingtime', 'block_dynamic_time') . '
                </div>
            </div>
        ';
        $this->content->footer = '';
        $this->page->requires->js_call_amd('block_dynamic_time/main_module', 'init');

        return $this->content;
    }
    /**
     * Define the block's capabilities.
     * This is where we specify who can add this block.
     * @return array Array of supported capabilities.
     */
    public function get_supported_capabilities() {
        return ['block/dynamic_time:addinstance' => true];
    }
}