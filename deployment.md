<h1>Deployment</h1>
<b>The following is how development is recommended for this project.</b>
<ol>
<li>Download and install <a href="https://localwp.com/">Local WP</a>(One-click WordPress Installation and Local development environment as LEMP stack) onto your desktop</li>
<li>Create a local environment similar to what is shown bellow</li>

![img.png](documentation-images/LEMP.JPG)
<li>Clone the <a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team01/blob/develop/DEPLOYMENT.md">GitHub</a> repository into themes folder of Local environment</li>
    <ol>
        <li>To develop features or edit/update existing features create a new branch in the repository, appropriately named by job for version control</li>
        <li>Note new developments, edits, and updates should be lodged on the Trello board, names for branches taken from theses card names</li>    
        <li>The Trello board effectively project manages and keeps a historical record of the project</li>
    </ol>

<li>Utilising a code editor such as PHPStorm or Visual Code Studio, or other IDE, and run:
```sh
$ composer install
$ npm install
```
<li>In relevant IDE customise the theme, making relevant version control commits, then push completed work to repository</li>
    <ol>
        <li>Create relevant pull requests to main branch</li>
        <li>Pull requests must be tested before merging to main branch.</li>
    </ol>

<li>Once the main branch is merged and updated with the changes, the repository can be pulled to local environment so as to be uploaded via zip file into the staging site via appearance/theme/add new, then activated to test in the staging website</li>
<li>After testing on the staging website is successful, the theme zip folder can be uploaded to the production site</li>
<li>Relevant links:</li>
    <ul>
        <li><a href="https://54.153.156.106/">AWS Development Site</a></li>
        <li><a href="https://jazz1.azurewebsites.net/">Azure Production Site</a></li>
        <li><a href="https://trello.com/b/iXwQkzbq/cp3402-g13-2021">Production Management Trello Board</a></li>
        <li>Slack Channel - cp3402 - project - team13</li>
        <li>Discord Server - CP3402 Group 13</li>
    </ul>
<p> ----------------------------------------------------------------------------------------------------------------</p>
<li>All-in-one WP Migration, from local to test:</li>
    <ol>
        <li>Select 'All-In-One WP Migration' on wp-admin, then 'Export'</li>
        <li>Select 'Find Replace with in the database'. In the 'Find' box, enter host you are currently working on. In 'Replace with', enter the host you are exporting to. The hosts are listed above</li>
        <li>Select 'Advanced Options'. Tick all boxes EXCEPT 'Do not export database' and 'Do not replace email domain'</li>
        <li>Select 'Export To' and select the file </li>
        <li>Navigate to host you wish to migrate to</li>
        <li>'Select All-In-One WP Migration' on wp-admin, then 'Import'</li>
        <li>Select 'Import From', then 'File', then navigate to the file you exported, select it</li>
    </ol>
<p>You should now have successfully imported your files, make sure to check that they are there.</p>
<p> ----------------------------------------------------------------------------------------------------------------</p>
</ol>
<p>An example of how the development team would work on the theme in a collaborative environment:</p>
<li>Open Local WP, and then start the instance of your working local environment</li>
<li>Pull changes from GitHub, following the notes in step 3. above</li>
<li>After making changes, push your changes, following  the notes in step 5. above</li>
<li>Note: at the current stage of this project, automation has not been implemented.</li>
<li>If any changes where made to the WordPress site (e.g. pages, post etc) you will need to upload the zip of the Github at its current state to test it .</li>
