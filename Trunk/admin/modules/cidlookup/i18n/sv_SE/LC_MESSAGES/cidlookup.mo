��    9      �  O   �      �  �  �     m  
   �  i   �     �     
          +     <  7   T     �  	   �     �     $     =     M  $   Y  '   ~     �     �     �     �     �  .   �     	  
   	     '	     6	     E	  
   J	     U	     i	  &   l	  	   �	  0   �	     �	  -   �	     
  o   
  �   x
        1     �  9     �     �     �     �  :        I     X  P   a  &   �  	   �     �     �     �  e  �  �  e  )   &     P  h   b     �     �     	          +  O   H     �     �  �   �  &   B     i     }  2   �  +   �     �     �               $  ,   +     X     ^     j          �     �     �     �  -   �  
   �  3   �  	   .  -   8     f  }   l  �   �     �  9   �  �  �     e     l  	   ~     �  :   �     �     �  r   �  1   c     �  	   �     �  	   �        	      "          %      2       8   -      ,   $       .      7                   (                           #      
       5   6           &              9   4   )                      +               !           1       0                 '          3       *            /       A Lookup Source let you specify a source for resolving numeric caller IDs of incoming calls, you can then link an Inbound route to a specific CID source. This way you will have more detailed CDR reports with informations taken directly from your CRM. You can also install the phonebook module to have a small number <-> name association. Pay attention, name lookup may slow down your PBX Add CID Lookup Source Add Source Allows Caller ID Lookup of incoming calls against different sources (MySQL, HTTP, ENUM, Phonebook Module) CID Lookup Source CID Lookup source Cache results: Caller ID Lookup CallerID Lookup Sources Checking for cidlookup field in core's incoming table.. Database name Database: Decide whether or not cache the results to astDB; it will overwrite present values. It does not affect Internal source behavior Delete CID Lookup source ERROR: failed:  Edit Source Enter a description for this source. FATAL: failed to transform old routes:  HTTP Host name or IP address Host: Inbound Call Control Internal Migrating channel routing to Zap DID routing.. MySQL MySQL Host MySQL Password MySQL Username None Not Needed Not yet implemented OK Password to use in HTTP authentication Password: Path of the file to GET<br/>e.g.: /cidlookup.php Path: Port HTTP server is listening at (default 80) Port: Query string, special token '[NUMBER]' will be replaced with caller number<br/>e.g.: number=[NUMBER]&source=crm Query, special token '[NUMBER]' will be replaced with caller number<br/>e.g.: SELECT name FROM phonebook WHERE number LIKE '%[NUMBER]%' Query: Removing deprecated channel field from incoming.. Select the source type, you can choose between:<ul><li>Internal: use astdb as lookup source, use phonebook module to populate it</li><li>ENUM: Use DNS to lookup caller names, it uses ENUM lookup zones as configured in enum.conf</li><li>HTTP: It executes an HTTP GET passing the caller number as argument to retrieve the correct name</li><li>MySQL: It queries a MySQL database to retrieve caller name</li></ul> Source Source Description: Source type: Source: %s (id %s) Sources can be added in Caller Name Lookup Sources section Submit Changes SugarCRM There are %s DIDs using this source that will no longer have lookups if deleted. Username to use in HTTP authentication Username: deleted not present removed Project-Id-Version: FreePBX cidlookup
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2010-06-22 19:14+0200
PO-Revision-Date: 2010-01-23 00:00+0100
Last-Translator: Mikael Carlsson <mickecamino@gmail.com>
Language-Team: 
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Poedit-Language: Swedish
X-Poedit-Country: SWEDEN
 En källa för nummerpresentation ger dig en möjlighet att få uppslag på namn för inkommande samtal. Du kan sedan länka en inkommande väg till denna källa. På detta vis kan du få en mer detaljerad samtalsrapport med information t.ex. från ert eget CRM. Du kan också installera telefonboksmodulen där ett mindre antal telefonnummer med namn kan skrivas in. Tänk på att namnuppslag kan orsaka fördröjningar innan samtalet kopplas upp. Lägg till källa för nummerpresentation Lägg till källa Tillhandahåller uppslag av nummerpresentation mot olika källor (MySQL, HTTP, ENUM, Telefonboksmodulen) Källa för nummerpresentation Källa för nummerpresentation Lagra resultat Nummerpresentation Källa f. nummerpresentation Kontrollerar om det fältet cidlookup finns i tabellen för inkommande vägar.. Databasnamn Databas: Välj om du ska mellanlagra resultaten i astDB; det kommer att skriva över eventuella poster som redan finns. Används inte om källa är Internal. Ta bort källa för nummerpresentation FEL: misslyckades:  Redigera källa Skriv en kortfattad beskrivning för denna källa. FEL: kunde inte transformera gamla vägar:  HTTP Datornamn eller IP-adress Dator: Inkommande samtal Intern Migrerar kanalvägar till Zap direktvägar.. MySQL MySQL-dator Lösenord för MySQL Användarnamn för MySQL Ingen Behövs inte Inte implementerad OK Lösenord att använda vid HTTP-autentisering Lösenord: Sökväg till filen via GET<br>t.ex. /cidlookup.php Sökväg: Porten HTTP-servern lyssnar på (standard 80) Port: Frågesträng, variabeln '[NUMBER]' kommer att bytas ut mot inkommande nummerpresentation<br>t.ex. nummer=[NUMBER]&source=crm Fråga, variabeln '[NUMBER]' kommer att bytas ut mot inkommande nummerpresentation<br>t.ex.: SELECT name FROM phonebook WHERE number LIKE '%[NUMBER]%' Fråga: Tar bort överblivna kanalfält från inkommande vägar.. Välj källtyp, du kan välja mellan:<ul><li>Intern: använder astdb som källa för nummeruppslag, använd telefonboks-modulen för att skriva in telefonnummer och namn.</li><li>ENUM: Använder DNS för att få fram nummerpresentation. ENUM-zoner konfigureras i enum.conf.</li><li>HTTP: använder HTTP GET med uppringarens nummer som argument</li><li>MySQL: använder en MySQLdatabas för att slå upp namn</li></ul> Källa Källbeskrivning: Källtyp: Källa: %s (id %s) Källor kan läggas till i Källor för nummerpresentation Spara ändringar SugarCRM Det finns %s Inkommande vägar för denna källa, om denna källa tas bort kommmer ingen nummeruppslagning att ske Användarnamn att använda vid HTTP-autentisering Användarnamn: borttagen inte tillgänglig borttagen 