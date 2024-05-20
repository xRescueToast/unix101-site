
<?php
    $page = "Accessing Unix | Unix 101";
	$path = "./";
	include($path. "assets/includes/header.php");
?>

    <div class="subnav">
        <ul>
            <li><a href="#access">Accessing Unix Nativley</a></li>
            <li><a href="#step1">Step 1 Download Ubuntu</a></li>
            <li><a href="#step2">Step 2 Create Bootable USB Drive</a></li>
            <li><a href="#step3">Step 3 Boot from USB</a></li>
            <li><a href="#step4">Step 4 Complete Installation</a></li>
            <li><a href="#access2">Accessing Unix on a Host Machine</a></li>
            <li><a href="#step5">Step 1 Install Virtualization Software</a></li>
            <li><a href="#step6">Step 2 Download Linux Iso</a></li>
            <li><a href="#step7">Step 3 Create Virtual Machine</a></li>
            <li><a href="#step8">Step 4 Configure VM Settings</a></li>
            <li><a href="#step9">Step 5 Complete Installation</a></li>
        </ul>
    </div>

    <div class="primaryFlex">
        <h2 class="flexTitle" id="access">Accessing Unix Nativley</h2>
        <p class="desc">A quick guide on how to install a Unix system both nativley and on a host machine</p>

        <h2 class="flexTitle" id="step1">Step 1: Download Ubuntu</h2>
        <ul>
            <li><span class="attribute">Visit the official Ubuntu website at https://ubuntu.com/download</span></li>
            <li><span class="attribute">Choose the version you wish to install, LTS (long-term support) is recommended for most users since it gets more support over a longer time period.</span></li>
            <li><span class="attribute">Select your system architecture: 32 or 64-bit.</span></li>
            <li><span class="attribute">Click the Download button to download the Ubuntu ISO file</span></li>
        </ul>

        <h2 class="flexTitle" id="step2">Step 2: Create a Bootable USB Drive</h2>
        <ul>
            <li><span class="attribute">Download a USB formatting software such as Rufus or Etcher</span></li>
            <li><span class="attribute">Open the software and select the target drive (the USB) and the ISO file then click start</span></li>
            <li><span class="attribute">More specific instructions can be found in each etching software.</span></li>
        </ul>
        <h2 class="flexTitle" id="step3">Step 3: Boot from the USB</h2>
        <ul>
            <li><span class="attribute">Insert your formatted USB into your computer.</span></li>
            <li><span class="attribute">Restart the computer and access either the BIOS or UEFI settings. The interrupt key to do so varies by manufacturer but the common ones include F2, F12, DEL, or ESC.</span></li>
            <li><span class="attribute">In the BIOS/UEFI settings set the boot order to prioritize the USB drive.</span></li>
            <li><span class="attribute">Save the changes and exit the BIOS or UEFI</span></li>
            <li><span class="attribute">The computer should now boot into the setup wizard on the USB.</span></li>
        </ul>
        <h2 class="flexTitle" id="step4">Step 4: Complete The installation</h2>
        <ul>
            <li><span class="attribute">Once the computer boots into the USB you should be met with the setup wizard for Ubuntu.</span></li>
            <li><span class="attribute">Once you complete the setup wizard your computer will boot into a fresh install of Ubuntu</span></li>
        </ul>

        <h2 class="flexTitle" id="access2">Accessing Unix On a Host Machine</h2>
        <p class="desc">A quick guide on how to install a ubuntu on a host system</p>

        <h2 class="flexTitle" id="step5">Step 1: Install a Virtualization Software</h2>
        <ul>
            <li><span class="attribute">For Windows(each software does the same thing, no need to install both)</span>
                <ul>
                    <li><span class="attribute">Download and install VirtualBox from the official website <a href="https://www.virtualbox.org/" target="_blank">https://www.virtualbox.org/</a></span></li>
                    <li><span class="attribute">Download and install VMware Workstation Player <a href="https://www.vmware.com/products/workstation-player.html" target="_blank">https://www.vmware.com/products/workstation-player.html</a></span></li>
                </ul>
            </li>
            <li><span class="attribute">For Mac(each software does the same thing, no need to install both)</span>
                <ul>
                    <li><span class="attribute">Download and install VirtualBox from the official website <a href="https://www.virtualbox.org/" target="_blank">https://www.virtualbox.org/</a></span></li>
                    <li><span class="attribute">Download and install Parallels Desktop for Mac <a href="https://www.parallels.com/" target="_blank">https://www.parallels.com/</a></span></li>
                </ul>
            </li>
        </ul>
        <h2 class="flexTitle" id="step6">Step 2: Download a Linux ISO</h2>
        <ul>
            <li><span class="attribute">Visit the official Ubuntu (does not have to be Ubuntu) website at <a href="https://ubuntu.com/download" target="_blank">https://ubuntu.com/download</a></span></li>
            <li><span class="attribute">Choose the version you wish to install.</span></li>
            <li><span class="attribute">Select your system architecture: 32 or 64-bit.</span></li>
        </ul>

        <h2 class="flexTitle" id="step7">Step 3: Create a virtual Machine</h2>
        <ul>
            <li><span class="attribute">Open your virtualization software.</span></li>
            <li><span class="attribute">Click “New” to create a new virtual machine.</span></li>
            <li><span class="attribute">Follow the steps provided by the software (a general guide is provided below, but may not match 1:1 to your software)</span>
                <ul>
                    <li><span class="attribute">Enter the name for the virtual machine</span></li>
                    <li><span class="attribute">Choose Linux as the guest OS type (some virtualization software will ask for the specific distro)</span></li>
                    <li><span class="attribute">Select the appropriate version of Linux or just use the default settings that get loaded if they are accurate.</span></li>
                    <li><span class="attribute">Allocate RAM (memory), at least 1 GB is recommended.</span></li>
                    <li><span class="attribute">Create a new virtual disk with at least 10 GB of space available (this is for the OS and other files that it needs to use)</span></li>
                </ul>
            </li>
        </ul>

        <h2 class="flexTitle" id="step8">Step 4: Configure VM Settings</h2>
        <ul>
            <li><span class="attribute">Select the virtual machine you created in your virtualization software.</span></li>
            <li><span class="attribute">Click on "Settings" or "Edit Virtual Machine Settings."</span></li>
            <li><span class="attribute">Under the "Storage" section you should mount the Linux ISO downloaded earlier as a virtual CD/DVD drive.</span></li>
            <li><span class="attribute">Go to the "System" section and arrange the boot order so that the CD/DVD drive is above the hard disk.</span></li>
            <li><span class="attribute">Click "OK" to save the settings.</span></li>
        </ul>

        <h2 class="flexTitle" id="step9">Step 5: Install Linux</h2>
        <ul>
            <li><span class="attribute">Start the virtual machine by selecting it and clicking "Start."</span></li>
            <li><span class="attribute">The virtual machine will boot from the Linux ISO you mounted. Follow the installation instructions provided by the Linux distribution.</span></li>
            <li><span class="attribute">Once the installation is complete, remove the ISO from the virtual CD/DVD drive and restart the virtual machine.</span></li>
        </ul>
    </div>
    
<?php
	$path = "./";
	include($path. "assets/includes/footer.php");
?>