# Mautic Google Sheet Bundle
This bundle allows user to fetch contacts from rows of google sheets and add as lead in mautic.

## APIs used
we are using google php client which is used for sheet access by another open source project.

https://github.com/googleapis/google-api-php-client
https://github.com/asimlqt/php-google-spreadsheet-client

however you don't need to configure anything, just create a sheet api from google console and obtain following 

`const CLIENT_APP_NAME = 'mautic';
const CLIENT_ID = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
const CLIENT_EMAIL = 'mautic@mautic-xxxx.iam.gserviceaccount.com';
const CLIENT_KEY_PATH = __DIR__ . '/../Google/mautic-service-api.p12'; // PATH_TO_KEY = where you keep your key file
const CLIENT_KEY_PW = 'notasecret'; //password for the secret key
`	

Make sure you place key file in the Google directory, in this project this was named as
`mautic-service-api.p12`

## Usage
1. clone repository
2. generate CLIENT_ credentials
3. Replace values in `MauticGSBundle/Command/FetchFromSheetCommand.php` and `MauticGSBundle/Controller/GSController.php`.
4. Install plugin in Mautic.
5. Sidemenu should be available.
6. Add Crons as provided in details below.
7. 3 forms are available for usage: Single Sheet>Worksheet, Mass Import all worksheet from any sheet and Change segment(to let you move leads from one segment to another in specific count as per your cron setup).

### Cron setup
`gs:custom:ChangeContactSegment` - works for moving contact from one segment to another, for 3rd form.

`gs:custom:FetchFromSheet` - When you submit the massimport form it stores the sheet and worksheet details with import information in database, then this command set up as cron will use the data from from submission to fetch contact from worksheets in plugin contact database.

`gs:custom:ImportIntoLeadSegment` - Imports the contacts from plugin table to the targeted segment where you can actually see them in mautic contacts.

### Google Sheet Configuration
- System will ignore any worksheet named as Template
- create general header row in google sheet with column headers as mautic fields which you would like to map.
- Share the sheet with `CLIENT_EMAIL` that was generating while obtaining credentials.

## Note
This plugin was created as a customize plugin to work with google sheet, and many more features were created however in this open source version we are releasing a global stable version which can be customized further according to need of the user.

This plugin doesn't include all mautic fields but very basic like firstname, lastname, email, phone, website etc but you are free to customize according to your needs.
## To Do
This is basic version which still need many improvements such as:

- Code optimization.
- Code cleaning.
- Removing mysql queries and converting in doctrine queries.
- Performance and visual optimization.