<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific apmt_locationuage governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header$
 * Description:  Defines the German (Germany) language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): 4net AG, Schoretshuebstr. 26 , CH-9015 St.Gallen
 *                 stating with v5.0.4 by crm-now, Berlin, www.crm-now.com
 ********************************************************************************/
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Kalender',
'LBL_MODULE_TITLE'=>'Kalender: Home',
'LBL_MODULE_APPOINTMENT'=>'Kalender: Termin',
'LBL_MODULE_APPOINTMENT_DETAIL'=>'Kalender: Termindetails',
'LBL_SAVE'=>'Speichern',
'LBL_RESET'=>'Abbrechen',
'LBL_LIST_USER_NAME'=>'Nutzername',
'LBL_LIST_NAME'=>'Name',
'LBL_CALENDAR_SHARED'=>'Kalender wird gegenwärtig geteilt mit',
'LBL_CALENDAR_SHARING'=>'Teile Kalender mit',
'LBL_SHARING_OPTION'=>'darf meinen Kalender sehen?',
'LBL_LIST_TOOLS'=>'Werkzeuge',
'LBL_SETTINGS'=>'Einstellungen',
'LBL_CALSETTINGS'=>'Kalendereinstellungen',
'LBL_USE24'=>'benutze 24 h Format',
'LBL_CALSTART'=>'starte meine Kalenderzeit mit',
'LBL_TIMESETTINGS'=>'Zeiteinstellungen',
'LBL_HOLDFOLLOWUP'=>'Nachfassen am',
'LBL_CALL' => 'Anruf',
'LBL_MEET' => 'Meeting',
'LBL_APPNT' => 'Termin',
'LBL_NEW_APPNT' => 'Neuer Termin',
'LBL_NEW_APPNT_INFO' => 'Erstelle einen neuen Termin',
'LBL_VIEW_DAY_APPNT_INFO' => 'zeige Termine für diesen Tag',
'LBL_CHANGE_APPNT' => 'zeige oder ändere diesen Termin (%s - %s)',

'LBL_DAY' => 'Tag',
'LBL_DAY_BUTTON_KEY' => 'D',
'LBL_DAY_BUTTON_TITLE' => 'Tag [Alt+D]',
'LBL_DAY1' => 'Montag',
'LBL_DAY2' => 'Dienstag',
'LBL_DAY3' => 'Mittwoch',
'LBL_DAY4' => 'Donnerstag',
'LBL_DAY5' => 'Freitag',
'LBL_DAY6' => 'Samstag',
'LBL_DAY0' => 'Sonntag',

'LBL_SM_MON' => 'MO',
'LBL_SM_TUE' => 'DI',
'LBL_SM_WED' => 'MI',
'LBL_SM_THU' => 'DO',
'LBL_SM_FRI' => 'FR',
'LBL_SM_SAT' => 'SA',
'LBL_SM_SUN' => 'SO',

'LBL_DATE_TITLE' => '%A, %d. %B %Y',

'LBL_WEEK' => 'Woche',
'LBL_WEEK_BUTTON_KEY' => 'W',
'LBL_WEEK_BUTTON_TITLE' => 'Woche [Alt+W]',
'LBL_WEEKS' => 'Wochen',
'LBL_NEXT_WEEK' => 'nächste Woche',
'LBL_LAST_WEEK' => 'vorherige Woche',
'LBL_4WEEKS_BACK' => '4 Wochen zurück',
'LBL_4WEEKS_PLUS' => '4 Wochen vor',
'LBL_RELOAD' => 'Neu Laden',


'LBL_APPCREATED_BY' => 'Erstellt von:',
'LBL_AT_DATE_TIME' => 'um',

'LBL_MON' => 'Monat',
'LBL_MON_BUTTON_KEY' => 'M',
'LBL_MON_BUTTON_TITLE' => 'Monat [Alt+M]',
'LBL_PREV_MON' => 'vorheriger Monat',
'LBL_NEXT_MON' => 'nächster Monat',

'LBL_YEAR_BUTTON_KEY'=>'Y',
'LBL_PREV_YEAR'=>'vorheriges Jahr',
'LBL_NEXT_YEAR' => 'nächstes Jahr',

'LBL_APP_LOCATION' => 'Ort',
'LBL_APP_IGNORE_TIME' => 'ignoriere vorherige Zeiten',
'LBL_SUBJECT'=>'Thema:',
'LBL_APP_DESCRIPTION' => 'Beschreibung',
'LBL_CONTACT'=>'Person:',
'LBL_CONTACT_LIST'=>'Personenliste:',

'LBL_APP_IGNORE_TIME2' => '(z.B. die Verabredung ist zu keiner <br />bestimmten Zeit an diesem Tag)',

'LBL_APP_ERR001' =>'Sie haben ein ungültiges Datum im Feld eingegeben!',
'LBL_APP_ERR002' =>'Ihr Angabe zum Start liegt nach dem Ende!',
'LBL_APP_ERR003' =>'Person fehlt!',
'LBL_APP_ERR004' =>'Thema fehlt!',
'ERR_DELETE_RECORD'=>"Zum Löschen muss mindestens ein Eintrag markiert sein.",
'DELETE_CONFIRMATION'=>"Möchten Sie diesen Eintrag löschen?",

'AppLoc'=> Array('0' => 'Büro'
			, '1' => 'ausserhalb'
			, '2' => 'Ferien'
			, '3' => 'krank'
			, '4' => 'verspätet'
			, '5' => 'anderes'
			, '6' => 'privat'),

'cal_month_long'=>array(
"",
"Januar",
"Februar",
"März",
"April",
"Mai",
"Juni",
"Juli",
"August",
"September",
"Oktober",
"November",
"Dezember",
),

'cal_weekdays_short'=>array(
"So",
"Mo",
"Di",
"Mi",
"Do",
"Fr",
"Sa",
),
'cal_weekdays_long'=>array(
"Sonntag",
"Montag",
"Dienstag",
"Mittwoch",
"Donnerstag",
"Freitag",
"Sonnabend",
),
'cal_month_short'=>array(
"",
"Jan",
"Feb",
"Mär",
"Apr",
"Mai",
"Jun",
"Jul",
"Aug",
"Sep",
"Okt",
"Nov",
"Dez",
),

'LBL_TIME'=>'Zeit',
'LBL_START_TIME' => 'Startzeit',
'LBL_END_TIME' => 'Endezeit',
'LBL_START_DATE'=>'Startdatum',
'LBL_TIME_START'=>'Beginn',
'LBL_DUE_DATE'=>'fällig',
'LBL_START_DATE_TIME'=>'Termin beginnt',
'LBL_END_DATE_TIME'=>'Termin endet',
'LBL_TODO'=>'Aufgabe',
'LBL_TODOS'=>'Aufgaben',
'LBL_EVENTS'=>'Ereignisse',
'LBL_TOTALEVENTS'=>'Anzahl meiner Ereignisse: ',
'LBL_TOTALTODOS'=>'Anzahl meiner Aufgaben :',
'LBL_VIEW'=>'Ansicht',
'LBL_LISTVIEW'=>'Listenansicht',
'LBL_HRVIEW'=>'Stundenansicht',
'LBL_WEEKVIEW'=>'Wochenansicht',
'LBL_MONTHVIEW'=>'Monatsansicht',
'LBL_YEARVIEW'=>'Jahresansicht',
'LBL_STATUS'=>'Status',
'LBL_ACTION'=>'Aktionen',
'LBL_ADD'=>'hinzufügen',
'LBL_OPENCAL'=>'Kalender öffnen',


'LBL_ADD_EVENT'=>'erstelle Ereignis',
'LBL_ADDCALL'=>'Anruf',
'LBL_ADDMEETING'=>'Meeting',
'LBL_ADDTODO'=>'Aufgabe',
'LBL_BEFOREEVENT'=>'vor dem Ereignisbeginn',
'LBL_BEFORETASK'=>'vor der Aufgabenbeginn',
'LBL_EVENTDETAILS'=>'Details',
'LBL_CURSTATUS'=>'aktueller Status',
'LBL_ASSINGEDTO'=>'zuständig',
'LBL_RELATEDTO'=>'bezogen auf',
'LBL_PENDING'=>'offen',
'LBL_PUBLIC'=>'öffentlich machen',
'LBL_MORE'=>'mehr',
'LBL_EDIT'=>'bearbeiten',
'LBL_EVERYDAY'=>'jeden Tag',
'LBL_EVERYWEEK'=>'jede Woche',
'LBL_EVERYMON'=>'jeden Monat',
'LBL_WEEKS'=>'Woche(n)',
'LBL_MONTHS'=>'Monat(e)',
'LBL_YEAR'=>'Jahr',
'LBL_NONE_SCHEDULED'=>'nicht geplant',

'LBL_INVITE_INST1'=>'Um jemanden einzuladen, wählen Sie einen Benutzer aus der "Verfügbare Nutzer" Liste und klicken Sie den "Hinzufügen" Button.',
'LBL_INVITE_SHARE'=>'Um das jemanden mitzuteilen, wählen Sie einen Benutzer aus der "Verfügbare Nutzer" Liste und klicken Sie den "Hinzufügen" Button.',
'LBL_INVITE_INST2'=>'Um jemanden aus der Liste zu entfernen, wählen Sie den Benutzer in der "Ausgewählte Nutzer" Liste und klicken Sie auf "Entfernen".',
'LBL_SELUSR_INFO'=>' Ausgewählte Nutzer werden eine E-Mail über diese Ereignis erhalten.',
'LBL_CALSHAREMESSAGE'=>'Teile meinen Kalender mit den folgenden CRM Nutzern',
'LBL_CALSHARE'=>'Kalender gemeinsam benutzen',
'LBL_SEL_USERS'=>'ausgewählte Nutzer',
'LBL_AVL_USERS'=>'verfügbare Nutzer',
'LBL_ADD_BUTTON'=>'Hinzufügen',
'LBL_USERS'=>'Benutzer',
'LBL_RMV_BUTTON'=>'Entfernen',
'LBL_SDRMD'=>'sende Erinnerung an',
'LBL_ENABLE_REPEAT'=>'Wiederholung freigeben',
'LBL_REPEAT_ONCE'=>'Wiederhole alle',
'LBL_ADD_TODO'=>'Aufgabe erzeugen',
'LBL_TODONAME'=>'Aufgabe',
'LBL_TODODATETIME'=>'Zeit & Datum',





//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_last_name' => 'LBL_LIST_LAST_NAME',
'db_first_name' => 'LBL_LIST_FIRST_NAME',
'db_title' => 'LBL_LIST_TITLE',
'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
//DON'T CONVERT THESE THEY ARE MAPPINGS -ENDS
'LBL_COMPLETED'=>'abgeschlossen',
'LBL_DEFERRED'=>'verschoben',
'LBL_HELD'=>'durchgeführt',
'LBL_NOTHELD'=>'nicht durchgeführt',
'LBL_POSTPONE'=>'verschieben',
'LBL_CHANGEOWNER'=>'Besitzer wechseln',
'LBL_DEL'=>'löschen',

//Added for actvity merge with calendar
'LBL_SEARCH_FORM_TITLE'=>'Aktivitätensuche',
'LBL_LIST_FORM_TITLE'=>'Aktivitätenliste',
'LBL_NEW_FORM_TITLE'=>'neue Aktivität',
'LBL_TASK_INFORMATION'=>'Aufgabeninformation',
'LBL_EVENT_INFORMATION'=>'Ereignisinformation',
'LBL_CALENDAR_INFORMATION'=>'Kalenderinformation',

'LBL_NAME'=>'Betreff:',
'LBL_ACTIVITY_NOTIFICATION'=>'Im CRM ist für Sie ein Termin hinterlegt. Dieser wurde ',
'LBL_ACTIVITY_INVITATION'=>'Sie wurden im CRM zu einem Ereignis eingeladen. Dieses wurde',
'LBL_DETAILS_STRING'=>'Hier sind die Details',
'LBL_REGARDS_STRING'=>'Bitte berücksichtigen Sie diesen Termin in Ihrer Planung',
'LBL_CONTACT_NAME'=>'Personenname',
'LBL_OPEN_ACTIVITIES'=>'offene Aktivitäten',
'LBL_ACTIVITY'=>'Aktivität:',
'LBL_HISTORY'=>'Historie',
'LBL_UPCOMING'=>"Meine aktuellen Aktivitäten",
'LBL_TODAY'=>'heute ',

'LBL_NEW_TASK_BUTTON_TITLE'=>'neue Aufgabe [Alt+N]',
'LBL_NEW_TASK_BUTTON_KEY'=>'N',
'LBL_NEW_TASK_BUTTON_LABEL'=>'neue Aufgabe',
'LBL_SCHEDULE_MEETING_BUTTON_TITLE'=>'Meeting planen [Alt+M]',
'LBL_SCHEDULE_MEETING_BUTTON_KEY'=>'M',
'LBL_SCHEDULE_MEETING_BUTTON_LABEL'=>'Meeting planen',
'LBL_SCHEDULE_CALL_BUTTON_TITLE'=>'Anruf planen [Alt+C]',
'LBL_SCHEDULE_CALL_BUTTON_KEY'=>'C',
'LBL_SCHEDULE_CALL_BUTTON_LABEL'=>'Anruf planen',
'LBL_NEW_NOTE_BUTTON_TITLE'=>'neue Notiz [Alt+T]',
'LBL_NEW_ATTACH_BUTTON_TITLE'=>'Datei hinzufügen [Alt+F]',
'LBL_NEW_NOTE_BUTTON_KEY'=>'T',
'LBL_NEW_ATTACH_BUTTON_KEY'=>'F',
'LBL_NEW_NOTE_BUTTON_LABEL'=>'neue Notiz',
'LBL_NEW_ATTACH_BUTTON_LABEL'=>'Datei hinzufügen',
'LBL_TRACK_EMAIL_BUTTON_TITLE'=>'Track E-Mail [Alt+K]',
'LBL_TRACK_EMAIL_BUTTON_KEY'=>'K',
'LBL_TRACK_EMAIL_BUTTON_LABEL'=>'Track E-Mail',

'LBL_LIST_CLOSE'=>'Schließen',
'LBL_LIST_STATUS'=>'Status',
'LBL_LIST_CONTACT'=>'Person',
//Added for 4.2 release for Account column support as shown by Fredy
'LBL_LIST_ACCOUNT'=>'Organisation',
'LBL_LIST_RELATED_TO'=>'Bezogen auf',
'LBL_LIST_DUE_DATE'=>'zu erledigen bis',
'LBL_LIST_DATE'=>'Datum',
'LBL_LIST_SUBJECT'=>'Betreff',
'LBL_LIST_LAST_MODIFIED'=>'zuletzt geändert',
'LBL_LIST_RECURRING_TYPE'=>'Wiederholungstyp',

'ERR_DELETE_RECORD'=>"Bitte wählen Sie wenigstens einen Eintrag aus.",
'NTC_NONE_SCHEDULED'=>'nichts geplant',

// Added vtiger_fields for Attachments in Activities/SubPanelView.php
'LBL_ATTACHMENTS'=>'Anhänge',
'LBL_NEW_ATTACHMENT'=>'neuer Anhang',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Alle',
'LBL_CALL'=>'Anruf',
'LBL_MEETING'=>'Meeting',
'LBL_TASK'=>'Aufgabe',

//Added for 4GA Release
'Subject'=>'Betreff',
'Assigned To'=>'zuständig',
'Start Date & Time'=>'Termin beginnt',
'Time Start'=>'Beginn',
'Due Date'=>'zu erledigen bis',
'Related To'=>'bezogen auf',
'Contact Name'=>'Personenname',
'Status'=>'Status',
'Priority'=>'Priorität',
'Visibility'=>'Sichtbarkeit',
'Send Notification'=>'sende Termin als E-Mail Nachricht',
'Created Time'=>'erstellt',
'Modified Time'=>'geändert',
'Activity Type'=>'Aktivitätentyp',
'Description'=>'Beschreibung',
'Duration'=>'Dauer',
'Duration Minutes'=>'Dauer in Minuten',
'Location'=>'Ort',
'No Time'=>'keine Zeitangabe',
//Added for Send Reminder 4.2 release
'Send Reminder'=>'sende Erinnerung',
'LBL_YES'=>'Ja',
'LBL_NO'=>'Nein',
'LBL_DAYS'=>'Tag(e)',
'LBL_MINUTES'=>'Minute(n)',
'LBL_HOURS'=>'Stunde(n)',
'LBL_BEFORE_EVENT'=>'vor dem Ereignis',
//Added for CustomView 4.2 Release
'Close'=>'Schließen',
'Start Date'=>'Startdatum',
'Type'=>'Typ',
'End Date'=>'Endedatum',
'Recurrence'=> 'wiederholende Ereignisse',
'Recurring Type'=> 'Wiederholungstyp',
//Activities - Notification Error
'LBL_NOTIFICATION_ERROR'=>'Mail Fehler: Bitten Sie den CRM Systemadministrator die Einstellungen für den ausgehenden Mailserver zu überprüfen ODER geben Sie eine gültige E-Mail Adresse unter Meine Einstellungen an.',
// Mike Crowe Mod --------------------------------------------------------added for generic search
'LBL_GENERAL_INFORMATION'=>'Allgemeine Information',

'LBL_EVENTTYPE'=>'Ereignistyp',
'LBL_EVENTNAME'=>'Ereignisname',
'LBL_EVENTSTAT'=>'Ereignis beginnt',
'LBL_EVENTEDAT'=>'Ereignis endet',
'LBL_INVITE'=>'Einladen',
'LBL_REPEAT'=>'Wiederholen',
'LBL_REMINDER'=>'Erinnerung',
'LBL_SENDREMINDER'=>'sende Erinnerung',
'LBL_NOTIFICATION'=>'Benachrichtigung',
'LBL_SENDNOTIFICATION'=>'sende diesen Termin als E-Mail Nachricht',
'LBL_RMD_ON'=>'E-Mail zur Erinnerung',
'LBL_REPEATEVENT'=>'wiederhole alle ',
'LBL_TIMEDATE'=>'Zeit & Datum',
'LBL_HR'=>'h',
'LBL_MIN'=>'min',
'LBL_EVENT'=>'Ereignis',
'Daily'=>'Tag(e)',
'Weekly'=>'Woche(n)',
'Monthly'=>'Monat(e)',
'Yearly'=>'Jahr',
'createdtime'=>'erstellt',
'modifiedtime'=>'geändert',
'first'=>'erste',
'last'=>'letzte',
'High'=>'hoch',
'Medium'=>'mittel',
'Low'=>'gering',
'LBL_SELECT'=>'auswählen',
'LBL_ALL_EVENTS_TODOS'=>'Alle Ereignisse & Aufgaben',
'First'=>'erster',
'Last'=>'letzter',
'on'=>'am',
'day of the month'=>'Tag des Monats',
'Private'=>'privat',
'Public'=>'öffentlich',

//Added for existing Picklist entries

'Planned'=>'geplant',
'Held'=>'durchgeführt',
'Not Held'=>'nicht durchgeführt',
'Completed'=>'abgeschlossen',
'Deferred'=>'verschoben',
'Not Started'=>'nicht begonnen',
'In Progress'=>'begonnen',
'Pending Input'=>'erwarte Zuarbeit',
'LBL_REMAINDER_DAY'=>'Tag(e)',
'LBL_REMAINDER_HRS'=>'Stunde(n)',
'Call'=>'Anruf',
'Meeting'=>'Meeting',

//added to send dates and time in calendar notification/invitation mail.

'Start date and time'=>'beginnt',
'End date and time'=>'endet',
//this is for task
'End date'=>'Endedatum',
'LBL_SET_DATE'=>'Datum angeben..',
'Recurrence'=>'Wiederholen',

//added to send invitation mail Subject.
'INVITATION'=>' Einladung ',

// Added/Updated for vtiger CRM 5.0.4
'LBL_YEAR_BUTTON_TITLE'=>'Jahr [Alt+Y]',
'LBL_SELECT_CONTACT'=>'Personen auswählen',
'SHARED_EVENT_DEL_MSG'=>'Sie habe keine Berechtigung diese Ereignisse zu verändern oder zu löschen.',
//added to fix ticket#4525
'LBL_CREATED'=>'erzeugt',
'LBL_UPDATED'=>'modifiziert',

//Added after 5.0.4 GA
'LBL_BUSY' => 'geblockt',

//Custom Fields support for Calendar
'LBL_CUSTOM_INFORMATION'=>'benutzerdefinierte Information',

// Repeat Event support for Calendar
'LBL_UNTIL' => 'bis',
'LBL_SET_DATE'=>'Setze Datum',

'LBL_MINE' =>'meine',
'LBL_SUCCESS_CALENDAR_1' => 'Anzahl der Aufgaben, die erfolgreiche importiert wurden: ',
'LBL_SKIPPED_CALENDAR_1' => 'Anzahl der Aufgaben, die nicht importiert wurden da Pflichtangaben fehlten: ',
'LBL_SUCCESS_EVENTS_1' => 'Anzahl der Ereignisse, die erfolgreiche importiert wurden: ',
'LBL_SKIPPED_EVENTS_1' => 'Anzahl der Ereignisse, die nicht importiert wurden da Pflichtangaben fehlten: ',
'LBL_FINISHED'=>'beendet',
'LBL_UNDO_LAST_IMPORT'=>'letzten Import rückgängig machen',
'LBL_LAST_IMPORT'=>'zuletzt importiert',
'LBL_LAST_IMPORT_UNDONE'=>'Ihr letzter Import wurde rückgängig gemacht',
'LBL_SUCCESS'=>'Erfolgreich!',
'LBL_NO_IMPORT_TO_UNDO'=>'Es konnte nichts rückgängig gemacht werden.',
'LBL_FAILURE'=>'Fehler!',
);

?>