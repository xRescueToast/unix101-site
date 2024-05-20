
<?php
    $page = "File And Directory | Unix 101";
	$path = "./";
	include($path. "assets/includes/header.php");
?>

    <div class="subnav">
        <ul>
            <li><a href="#ls">ls</a></li>
            <li><a href="#cd">cd</a></li>
            <li><a href="#mkdir">mkdir</a></li>
            <li><a href="#pwd">pwd</a></li>
            <li><a href="#rm">rm</a></li>
            <li><a href="#cp">cp</a></li>
        </ul>
    </div>

    <div class="primaryFlex">
        <h2 class="flexTitle" id="ls">File and Directory in Unix</h2>
        <p class="desc">In Linux, navigating files and directories is primarily done through the command line using commands like "cd" to change directories, "ls" to list the contents of a directory, and "pwd" to display the current working directory. The Linux file system is hierarchical, with the root directory ("/") at the top, followed by various subdirectories. You can use relative or absolute paths to specify file or directory locations and shortcuts like ".." to move up one directory level. Understanding these fundamental commands and concepts is essential for efficiently managing files and directories in a Unix environment, where the command line provides powerful tools for both beginners and advanced users to organize and access data.</p>
        <h2 class="flexTitle" id="ls">ls</h2>
        <p class="desc">Command Functionality:</p>
        <ul>
            <li><span class="attribute">-l : Long format. Displays detailed information about each file, including permissions, owner, group, file size, modification date, and file/directory name.</span></li>
            <li><span class="attribute">-a : List all files, including hidden files that start with a dot (for example: .config, .bashrc).</span></li>
            <li><span class="attribute">-h : Human-readable file sizes. Displays file sizes in a more readable format (e.g., 1K, 2M).</span></li>
            <li><span class="attribute">-t : Sort by modification time, with the newest files first.</span></li>
            <li><span class="attribute">-r : Reverse the order of listing (e.g., from Z to A, or from oldest to newest).</span></li>
            <li><span class="attribute">-R : Recursive. Lists files and directories in the current directory and all its subdirectories.</span></li>
            <li><span class="attribute">You can use wildcards with ls to filter the listing. For example: use ls *.txt to list all files with a .txt extension in the current directory</span></li>
            <img src="./assets/images/ls_cmd_ex.png" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="cd">cd</h2>
        <p class="desc">Command Functionality:</p>
        <ul>
            <li><span class="attribute">cd ~/Documents : Here ~/ represents your home directory, so this command will take you to the /home/username/Documents directory</span></li>
            <li><span class="attribute">Typing “cd” without any arguments will take you back to your home directory /home/username/</span></li>
            <li><span class="attribute">cd ~/username will take you to another user's home directory /home/username/</span></li>
            <li><span class="attribute">cd - : This will switch back to the previous directory you were in. Useful for quickly swapping back and forth between two different directories.</span></li>
            <li><span class="attribute">cd $PROJECTS : you can use environment variables to navigate to saved directories. If you had a variable called $PROJECTS set to the your projects folder cd $PROJECTS folder would navigate to whichever path was stored in that variable.</span></li>
            <li><span class="attribute">Absolute vs Relative Paths</span></p>
                <ul>
                    <li><span class="attribute">You can use absolute paths (the entire path starting from the top of the system file directory: /home/username/folder) or relative paths(paths that start from your current location../folder)</span></li>
                    <li><span class="attribute">Navigating up and down: cd .. will take you up 1 level in the directory tree. If you were in /home/username/projects and wanted to quickly get to the /home/username/Documents directory you could type cd ../Documents</span></li>
                </ul>
            </li>
            <img src="./assets/images/cd_cmd_ex" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="mkdir">mkdir</h2>
        <p class="desc">Command Functionality:</p>
        <ul>
            <li><span class="attribute">mkdir myfolder : will create a folder in your current working directory named ‘myfolder’</span></li>
            <li><span class="attribute">mkdir -p parent/child : will create two folders, one called ‘parent’ and then another called child nested within the parent folder.</span></li>
            <li><span class="attribute">mkdir dir1 dir2 dir3 : will create 3 directories in your current working directory named dir1 dir2 and dir3</span></li>
            <img src="./assets/images/mkdir_cmd_ex" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="pwd">pwd</h2>
        <p class="desc">Command Functionality:</p>
        <ul>
            <li><span class="attribute">pwd : will print the absolute path to your current working directory</span></li>
            <img src="./assets/images/pwd_cmd_ex" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="rm">rm</h2>
        <p class="desc">Command Functionality</p>
        <ul>
            <li><span class="attribute">-rm myfile.txt : will remove a target file “myfile.txt” in your current working directory.</span></li>
            <li><span class="attribute">rm -r /directory : will recursively remove every file in the directory selected until finally the directory itself is deleted.</span></li>
            <li><span class="attribute">rm -i myfile.txt : will ask the user to confirm the deletion of each file specified.</span></li>
            <li><span class="attribute">rm -f myfile.txt : will forcibly delete files and directories without any prompts or warnings. Be very careful when using the -f parameter because it could lead to permanent data loss.</span></li>
            <img src="./assets/images/rm_cmd_ex" alt="Image of command example">
        </ul>
        <h2 class="flexTitle" id="cp">cp</h2>
        <p class="desc">Command Functionality</p>
        <ul>
            <li><span class="attribute">cp file.txt file_copy.txt : will create a duplicate of ‘file.txt’ renamed to ‘file_copy.txt’ in your current directory.</span></li>
            <li><span class="attribute">cp file.txt file2.txt file3.txt /path/to/destination : will create a duplicate of ‘file.txt’ ‘file2.txt’ and ‘file3.txt’ in the target directory specified after listing the files to be copied.</span></li>
            <li><span class="attribute">cp -a myfile.txt /destination : will preserve the attributes (permissions, timestamps, etc) of the file being copied when copying it to a new location.</span></li>
            <img src="./assets/images/cp_cmd_ex" alt="Image of command example">
        </ul>
    </div>
    
<?php
	$path = "./";
	include($path. "assets/includes/footer.php");
?>