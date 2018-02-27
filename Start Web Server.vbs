Sub ReplaceInFile(filePath, findText, replaceWith)
    Dim fs, file, text, regex
    Set fs = WScript.CreateObject("Scripting.FileSystemObject")
    Set file = fs.OpenTextFile(filePath)
    text = file.ReadAll
    file.Close

    Set regex = New RegExp
    regex.Pattern = findText
    regex.IgnoreCase = True
    regex.Global = True
    regex.MultiLine = True
    text = regex.Replace(text, replaceWith)

    Set file = fs.OpenTextFile(filePath, 2)
    file.Write text
    file.Close
    Set file = Nothing
    Set fs = Nothing
End Sub

Function IsRunning(procName)
	Set service = GetObject("winmgmts:{impersonationLevel=impersonate}!\\.\root\cimv2")
	Set procs = service.ExecQuery("SELECT * FROM Win32_Process WHERE Name = '" + procName + "'")
	If procs.Count = 0 Then
		IsRunning = False
	Else
		IsRunning = True
	End If
End Function

basePath = WScript.ScriptFullName
basePath = Left(basePath, InStrRev(basePath, "\")-1)

ReplaceInFile basePath + "\nginx\conf\nginx.conf", "root .+;", "root """ + basePath + "\www"";"

Set shell = WScript.CreateObject("WScript.Shell")
If Not IsRunning("php-cgi.exe") Then
	shell.Run """" + basePath + "\php\php-cgi.exe"" -b 127.0.0.1:9000 -c """ + basePath + "\php""", 0, False
End If
If Not IsRunning("nginx.exe") Then
	shell.Run """" + basePath + "\nginx\nginx.exe"" -p """ + basePath + "\nginx""", 0, False
End If

WScript.Echo "Ff lekker kijken?"
shell.Run "https://www.youtube.com/", 0, False
