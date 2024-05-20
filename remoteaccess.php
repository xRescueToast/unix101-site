
<?php
    $page = "Remote Access | Unix 101";
	$path = "./";
	include($path. "assets/includes/header.php");
?>

    <div class="subnav">
        <ul>
            <li><a href="#rmtaccess">Remote Access</a></li>
            <li><a href="#ssh">ssh</a></li>
            <li><a href="#chmod">chmod</a></li>
            <li><a href="#echo">echo</a></li>
            <li><a href="#clear">clear</a></li>
        </ul>
    </div>

    <div class="primaryFlex">
        <h2 class="flexTitle" id="rmtaccess">Remote Access</h2>
        <p class="desc">Remote access in Linux refers to the ability to connect to and control a Linux-based computer or server from a different location or device over the internet. It enables administrators and users to manage, execute commands, and perform tasks on remote systems without physically being present at the machine's location. Secure protocols like SSH are commonly used for remote access which helps secure data and provides authentication. Remote access in Linux is commonly used for system administration, remote server management, collaborative work, and accessing resources from virtually anywhere, contributing to the flexibility of UNIX based systems.</p>
        <h2 class="flexTitle" id="ssh">ssh</h2>
        <p class="desc">SSH is a network protocol used to securely connect to a remote computer or server over a network. It provides a secure channel for accessing and managing devices remotely, allowing tasks such as command execution, or file transfering.</p>
        <ul>
            <li><span class="attribute">Basic syntax : ssh username@serverip</span></li>
            <li><span class="attribute">Specifying a port: ssh -p 2222 username@serverip will tell SSH to try to connect to a specific port, useful if the port the SSH service running on the server is set to be on a different open port than default.</span></li>
            <li><span class="attribute">Remote command execution: ssh username@serverip [command] will let you run commands from your local machine without needing to log into an ssh shell every time.</span></li>
            <li><span class="attribute">ssh-keygen: generates a key pair on your local machine which can be used to log into a remote server without a password once the key is uploaded to the server you want to access</span></li>
            <li><span class="attribute">ssh-copy-id username@serverip copies the key generated by ssh-keygen and allows you to log in without a password.</span></li>
            <img src="./assets/images/ssh_cmd_ex.png" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="chmod">chmod</h2>
        <p class="desc">Chmod is used to change the permissions (read, write, execute) of files and directories in a system. It allows users to control who can access or modify a particular file or directory by setting permissions for the owner, group, and other system users.</p>
        <ul>
            <li><span class="attribute">Basic syntax: chmod u+rw myfile.txt</span></li>
            <li><span class="attribute">Permission Symbols</span>
                <ul>
                    <li><span class="attribute">u: for the owner (user)</span></li>
                    <li><span class="attribute">g: for the group</span></li>
                    <li><span class="attribute">o: for others (everyone else)</span></li>
                    <li><span class="attribute">a: for all (a combination of ugo)</span></li>
                    <li><span class="attribute">Permissions can be added (+), removed(-), or set explicitly(=)</span></li>
                </ul>
            </li>
            <li><span class="attribute">Permission Codes</span>
                <ul>
                    <li><span class="attribute">4 for read (r)</span></li>
                    <li><span class="attribute">2 for write (w)</span></li>
                    <li><span class="attribute">1 for execute (x)</span></li>
                    <li><span class="attribute">a: for all (a combination of ugo)</span></li>
                    <li><span class="attribute">The sum of these numbers represents the permission code: chmod 664 sets read and write permissions for the owner and read-only permissions to others.</span></li>
                </ul>
            </li>
            <li><span class="attribute">chmod -r will change file permissions recursively within a folder. Useful for changing the permissions of all files within a directory.</span></li>
        </ul>
        <h2 class="flexTitle" id="echo">echo</h2>
        <p class="desc">Echo is a command used to display text or variables as output by taking the input provided and printing it to the terminal. This command is versatile and frequently used in shell scripts to output messages</p>
        <ul>
            <li><span class="attribute">echo "Hello, Linux!": will output a message, whatever is in the quotes,  to the terminal.</span></li>
            <li><span class="attribute">echo "Hello, $username!": will output a message, whatever is in the quotes,  to the terminal while replacing whatever variables are present with their assigned value. (if the command ‘username = john’ was run before this command the output to the terminal would be “Hello, John”)</span></li>
            <li><span class="attribute">echo “this is a message” > output.txt: will redirect the output of the echo command to a file name output.txt</span></li>
            <li><span class="attribute">echo “additional information” >> output.txt: will append the output of the echo command to the end of the target document (output.txt should now read “this is a message” followed by “additional information”)</span></li>
            <li><span class="attribute">Special Characters</span>
                <ul>
                    <li><span class="attribute">\n for a new line</span></li>
                    <li><span class="attribute">\t for a tab</span></li>
                    <li><span class="attribute">\\ to display a backslash</span></li>
                    <li><span class="attribute">\” to display a double quotation mark</span></li>
                </ul>
            </li>
            <img src="./assets/images/echo_cmd_ex.png" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="clear">clear</h2>
        <p class="desc">Command that clears the terminal screen.</p>
        <ul>
            <li><span class="attribute">Usage: clear or ctr + L</span></li>
            <li><span class="attribute">Clears the screen of the terminal but does not delete command history or interact with files on the system.</span></li>
            <li><span class="attribute">Very useful for increasing readability after very verbose commands have been executed.</span></li>
        </ul>
    </div>
    
<?php
	$path = "./";
	include($path. "assets/includes/footer.php");
?>