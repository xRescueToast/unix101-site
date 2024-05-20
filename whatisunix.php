
<?php
    $page = "What is Unix | Unix 101";
	$path = "./";
	include($path. "assets/includes/header.php");
?>

    <div class="subnav">
        <ul>
            <li><a href="#unix">What is Unix?</a></li>
            <li><a href="#unixhist">History of Unix</a></li>
        </ul>
    </div>

    <div class="primaryFlex">
        <h2 class="flexTitle" id="unix">What is Unix?</h2>
        <p class="desc">Unix is a powerful operating system that originally started development in the 1970s as a joint research effort between Bell Labs (later AT&T), General Electric, and Massachusetts Institute of Technology. Unix is known for its general stability, security, and ability to run on almost anything due to being written in the C programming language. It has had far-reaching impacts on computing, and is still heavily used in any computing centric field today.</p>
        <p class="desc">Unix is a popular choice for servers and embedded systems, pretty much any computer or system that isn’t Windows will be using some form of Unix. It has influenced the design of several other operating systems as well, including macOS and Linux, and the philosophy behind its design continues to drive modern standards in computing.</p>
        

        <h2 class="flexTitle" id="unixhist">History of Unix</h2>
        <p class="desc">Unix was created in the late 1960s, designed on a PD-7 minicomputer, chosen by one of its creators, Ken Thompson, because of his familiarity with the system from his hobby work based on its platform. Unix was originally a joint research project between Bell Labs (later AT&T), Massachusetts Institute of Technology, and General Electric. Its original goal was to create a solution to the limitations of the Multics project, and aimed to create a more efficient and flexible operating system. The name Unix (originally Unics) came from a play on words based on the streamlining of the Multics project into a simpler system. </p>
        <p class="desc">Displeased with the progress of the project, the companies behind it decided to pull out leaving the founders Ken Thompson and Dennis Ritchie to complete the project on their own with a small team of recruits from Bell Labs. In the late 1970s and early 1980 Unix gained a strong following in academics, which would lead to commercial startups, such as Solaris Technologies, adopting it on a larger scale. Later, in 1991, Linux Torvalds would go on to create a Unix-based operating system, now known as Linux, for his computer, a system which would go on to spur the development of many different distributions of Linux. This would cement Unix and Linux.</p>
        <img src="./assets/images/thompson.jpg" alt="Image of Ken Thompson">
    </div>
    
<?php
	$path = "./";
	include($path. "assets/includes/footer.php");
?>