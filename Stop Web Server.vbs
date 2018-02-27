Function IsRunning(procName)
	Set service = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")
	Set procs = service.ExecQuery("SELECT * FROM Win32_Process WHERE Name = '" + procName + "'")
	If procs.Count = 0 Then
		IsRunning = False
	Else
		IsRunning = True
	End If
End Function

Sub KillProcess(procName)
	Set service = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")
	Set procs = service.ExecQuery("SELECT * FROM Win32_Process WHERE Name = '" + procName + "'")
	For Each proc in procs
		proc.Terminate() 
	Next  
End Sub

basePath = WScript.ScriptFullName
basePath = Left(basePath, InStrRev(basePath, "\")-1)

Set shell = WScript.CreateObject("WScript.Shell")
KillProcess "php-cgi.exe"
If IsRunning("nginx.exe") Then
	shell.Run """" + basePath + "\nginx\nginx.exe"" -p """ + basePath + "\nginx"" -s stop", 0, False
End If

WScript.Echo "Toch maar niet?"
