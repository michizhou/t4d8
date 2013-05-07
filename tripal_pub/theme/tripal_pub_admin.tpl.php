<br /><h3>Tripal Publication Administrative Tools Quick Links</h3>
<ul>
  <li><?php print l('Search for Publications', 'find/publications') ?></li>
  <li><?php print l('Configuration', 'admin/tripal/tripal_pub/configuration') ?></li>
  <li><?php print l('Sync Publications', 'admin/tripal/tripal_pub/sync') ?></li>
  <li><?php print l('List of Importers', 'admin/tripal/tripal_pub/import_list') ?></li>
  <li><?php print l('Add a New Importer', 'admin/tripal/tripal_pub/import/new') ?></li>
</ul>

<h3>Module Description:</h3>
<p>The Tripal Publication Module provides the functionality for adding, editing, deleting viewing and bulk 
importing of publications.  This module additionally provides a search tool for finding publications that have
been added to Chado database.
 </p>
<h3>Setup Instructions:</h3>
<ol>
  <li><p><b>Set Permissions</b>: The publication module supports the Drupal user permissions interface for
    controlling access to publication content and functions. These permissions include viewing,
    creating, editing or administering of
    publications. The default is that only the original site administrator has these
    permissions.  You can <a href="<?php print url('admin/user/roles') ?>">add roles</a> for classifying users,
    <a href="<?php print url('admin/user/user') ?>">assign users to roles</a> and
    <a href="<?php print url('admin/user/permissions') ?>">assign permissions</a> for the publication content to
    those roles.  For a simple setup, allow anonymous users access to view publication content and
    allow the site administrator all other permissions.</p></li>
  <li><p><b>Sync Publications</b>:  If you already have publications in your Chado database, or you loaded them
    through a means other than Tripal, and you want those publications to appear on your site then you will need
    to "sync" them with Drupal.  Use the <?php print l('sync publications', 'admin/tripal/tripal_pub/sync') ?>
    page to sync all publications.</p></li>
  <li><p><b>Configure the Search Behavior</b>: Before allowing site visitors to search for publications 
   visit the <?php print l('configuration page', 'admin/tripal/tripal_pub/configuration') ?> to disable or enable
   fields for searching.  Tripal uses its own ontology for storing publication information in Chado, and all 
   child terms of the "Publication Details" are made available for searching. However, some of these
   may not be desired for searching and can be disabled.</p></li>
</ol>
<h3>Features of this Module:</h3>
<ul>
  <li><p><b>Add/Edit/Delete Publications</b>: Publications can be maually added <?php  l('here', 'node/add/chado-pub') ?>. 
    Once added, publications can be modified or deleted by clicking the Edit tab at the top of a publication page.</p></li>
  
  <li><p><b>Publication Search Tool</b>: A <?php print l('search tool','find/publications') ?> is provided for 
    finding publications. Unlike most default search tools for Tripal, this tool does not relies on Drupal Views</p></li>
    
  <li><p><b>Bulk Import of Publications</b>: Site administrators can  <?php print l('add a new publication importer', 'admin/tripal/tripal_pub/import/new') ?> 
    which provides a set of search terms for querying a remote publication database (e.g. PubMed). Publications
    that matche the search terms can be imported when the publication import cron command is executed.  The
    cron command can be executed using the Drush command: drush tpubs-import.  This drush command can be added
    as a system-wide cron (in the same way the Tripal jobs cron is implemented) to be executed on a periodic basis.
    This will allow the site to import publications which have been newly added to remote databases and which 
    are relative to the site.  Site administrators can <?php print l('see the list of importers', 'admin/tripal/tripal_pub/import_list') ?> 
    and edit, disable or delete the importers.</p></li>

</ul>

