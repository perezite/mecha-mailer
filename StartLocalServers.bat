@echo off

rem # Initialization
SET basePath=%~dp0

rem ## Copy initial database files if not already existing
SET initDatabaseDataSourceDir=%basePath:~0,-1%\DevelopmentServers\MySQL\initialData\mechamailer
SET initDatabaseDataTargetDir=%basePath:~0,-1%\DevelopmentServers\MySQL\mysql_mini_server_11\udrive\data\mechamailer
IF NOT EXIST %initDatabaseDataTargetDir% (
	mkdir %initDatabaseDataTargetDir%
	xcopy %initDatabaseDataSourceDir% %initDatabaseDataTargetDir% /s > nul
)

rem # Start MySQL server
SET mysqlStartBatch=%basePath:~0,-1%\DevelopmentServers\MySQL\mysql_mini_server_11\mysql_start.bat
call %mysqlStartBatch% > nul

rem # Start PHP Server 
cd DevelopmentServers\PHP\php-5.3.0-Win32-VC6-x86
SET phpStartExecutable=%basePath:~0,-1%\DevelopmentServers\PHP\php-5.3.0-Win32-VC6-x86\QuickPHP.exe /Minimized /Start
start %phpStartExecutable% > nul
cd ..
cd ..

rem # Show intermediate message
echo If no error messages occured, the servers should be running now. Press enter twice to stop the servers.
pause
pause

rem # Stop PHP Server
taskkill /f /im QuickPHP.exe > nul

rem # Stop MySQL Server
SET mysqlStopBatch=%basePath:~0,-1%\DevelopmentServers\MySQL\mysql_mini_server_11\mysql_stop.bat
call %mysqlStopBatch% > nul

rem # Show goodbye message
echo If no error messages occured, the servers should be stopped now.
pause