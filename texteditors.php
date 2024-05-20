
<?php
    $page = "Text Editors | Unix 101";
	$path = "./";
	include($path. "assets/includes/header.php");
?>

    <div class="subnav">
        <ul>
            <li><a href="#texteditor">Text Editors</a></li>
            <li><a href="#vim">Vim</a></li>
            <li><a href="#nano">Nano</a></li>
            <li><a href="#emacs">Emacs</a></li>
        </ul>
    </div>

    <div class="primaryFlex">
        <h2 class="flexTitle" id="texteditor">Text Editors</h2>
        <p class="desc">Nano, Emacs, and Vim are popular text editors used in Unix based operating systems which each offer unique experiences. Nano is known for its simplicity and user-friendliness, making it an excellent choice for beginners. It offers basic text editing features and an easy to understand interface. Emacs, is an extensive and powerful text editor with a wide range of features, including code editing, scripting, and email capabilities. It has a steep learning curve but offers enhanced customization and productivity for experienced users. Vim, short for "Vi Improved," is also an efficient and modal text editor that emphasizes keyboard shortcuts and efficiency. It's favored by many programmers and system administrators for its speed and versatility, once you get used to its unique modal editing system. The choice between these editors comes down to personal preference and specific use cases, with Nano offering simplicity, Emacs offering customization, and Vim providing efficiency and speed.</p>

        <h2 class="flexTitle" id="vim">Vim</h2>
        <p class="desc">Vim is a popular text editor known for its modal editing system which allows users to navigate and edit files using keyboard shortcuts and commands. Vim has extensive plugin support, syntax highlighting, and multiple buffers.</p>
        <ul>
            <li><span class="attribute">Open a file with “vim filename.txt”</span></li>
            <li><span class="attribute">Modes in Vim</span>
                <ul>
                    <li><span class="attribute">Normal mode: used for navigation and commands</span></li>
                    <li><span class="attribute">Insert mode: used for editing text</span></li>
                    <li><span class="attribute">Visual mode: used for selecting text</span></li>
                </ul>
            </li>
            <li><span class="attribute">Navigating in Normal Mode</span>
                <ul>
                    <li><span class="attribute">Use the arrow keys or the letter shortcuts</span></li>
                    <li><span class="attribute">'h' left, 'j' down, 'k' up, 'l' right.</span></li>
                    <li><span class="attribute">'gg' beginning of file, 'G' end of file</span></li>
                </ul>
            </li>
            <li><span class="attribute">Use 'i' to switch to insert mode</span></li>
            <li><span class="attribute">Use 'v' to switch to visual mode</span></li>
            <li><span class="attribute">Saving and Quitting</span>
                <ul>
                    <li><span class="attribute">:w - saves changes without quitting</span></li>
                    <li><span class="attribute">:q - quits without saving</span></li>
                    <li><span class="attribute">:q! - force quits without saving</span></li>
                </ul>
            </li>
            <li><span class="attribute">You can use a ~/.vimrc file to configure shortcuts and change behavior to your preferences.</span></li>
        </ul>


        <h2 class="flexTitle" id="nano">nano</h2>
        <p class="desc">Nano is a basic text editor good for quick config edits or light editing. It is very useful for beginners to learn the basics of text editing on unix without a gui application.</p>
        <ul>
            <li><span class="attribute">Open a file with “nano filename.txt”</span></li>
            <li><span class="attribute">Navigation</span>
                <ul>
                    <li><span class="attribute">Use the arrow keys to move the cursor</span></li>
                    <li><span class="attribute">To insert text you can just start typing</span></li>
                    <li><span class="attribute">Ctrl + k to delete a line</span></li>
                    <li><span class="attribute">Ctrl + w to search and locate text (similar to ctrl + f on a web browser). Once text is found you can use ctrl + w again to find the next occurrence</span></li>
                </ul>
            </li>
            <li><span class="attribute">Saving and Quitting</span>
                <ul>
                    <li><span class="attribute">Ctrl + o to save then enter to confirm</span></li>
                    <li><span class="attribute">Ctrl + x to exit</span></li>
                </ul>
            </li>
            <li><span class="attribute">You can customize nano with a ~/nanorc configuration file. You can modify settings like syntax highlighting and key binds to match your preferences.</span></li>
            <img src="./assets/images/nano_ex.png" alt="Image of Nano editor">
        </ul>


        <h2 class="flexTitle" id="emacs">emacs</h2>
        <p class="desc">Emacs is a popular text editor geared to advanced users. It is very robust allowing for synatix highlighting for serveral programming languages and its ability to run shell commands within the editor.</p>
        <ul>
            <li><span class="attribute">Open a file with “emacs myfile.txt”</span></li>
            <li><span class="attribute">Navigation</span>
                <ul>
                    <li><span class="attribute">Ctrl + p for previous line</span></li>
                    <li><span class="attribute">Ctrl + n for next line</span></li>
                    <li><span class="attribute">Ctrl + b to move the cursor back a character</span></li>
                    <li><span class="attribute">Ctrl + f to move the cursor forward a character</span></li>
                    <li><span class="attribute">Ctrl + x followed by ctrl + s to save changes</span></li>
                    <li><span class="attribute">Ctrl + x followed by ctrl + c to exit (emacs will ask you to save changes)</span></li>
                    <li><span class="attribute">Ctrl + x followed by ctrl + u to undo</span></li>
                    <li><span class="attribute">Ctrl + _ to redo</span></li>
                    <li><span class="attribute">Ctrl + S to search</span></li>
                </ul>
            </li>
            <li><span class="attribute">You can create a ~/emacs or ~/.emacs.d/init.el file to configure emac's behavior which includes keybinds appearance options and functions.</span></li>
        </ul>
    </div>
    
<?php
	$path = "./";
	include($path. "assets/includes/footer.php");
?>