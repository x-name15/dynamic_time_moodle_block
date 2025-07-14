# dynamic_time

A Moodle block plugin that displays the current time dynamically on course pages. The time is rendered using JavaScript for real-time updates.

## Features

- Shows the current time in a block.
- Time updates automatically without page reload.
- Permissions for teachers, managers, and users to add the block.

## Installation

1. Copy the `block_dynamic_time` folder to your Moodle `blocks` directory.
2. Visit the Site Administration > Notifications page to complete installation.

## Usage

- Add the block to any course or dashboard.
- The time will appear and update automatically.

## Permissions

- `block/dynamic_time:addinstance`: Allows adding the block to courses (editing teachers, managers).
- `block/dynamic_time:myaddinstance`: Allows users to add the block to their dashboard.

## License

GNU GPL v3 or later
