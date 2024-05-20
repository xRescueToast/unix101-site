var numCorrect = 0;
var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');
var questionNum = document.getElementById('question_num');
var questionText = document.getElementById('question')
var nextButton = document.getElementById('next');
var backButton = document.getElementById('previous');
var redoButton = document.getElementById('redo');

var currentQuestion = 0;

//We decided to not print explanations for each question as they are often self explanatory and an explanation would not offer much. Instead we added an alert to prompt the user to select an answer if left empty. 
//We also changed the progress bar to a numerical counter since it is easier for the user to read and understand where they are in the quiz.

var questions = [
            {
                question: "What is the primary function of the command 'ls'",
                options: [
                    { label: 'A) Display the contents of a file', value: 'A' },
                    { label: 'B) Changes your current working directory', value: 'B' },
                    { label: 'C) Saves command line output to a file', value: 'C' },
                    { label: 'D) Displays the files within a directory', value: 'D' }
                ],
                correctAnswer: 'D'
            },
            {
                question: "What functionality does the '-a' tag add to the command 'ls'",
                options: [
                    { label: 'A) Display file sizes in a human readable format', value: 'A' },
                    { label: 'B) Reverses the order of the file listings', value: 'B' },
                    { label: 'C) Lists all files within a directory, including hidden files', value: 'C' },
                    { label: 'D) Lists all files within a directory in long format, including permissions, modification date, etc', value: 'D' }
                ],
                correctAnswer: 'C'
            },
            {
                question: "The [blank] tag adds functionality to the 'ls' command that will display the size of files in a human readable format (mb, gb, etc)",
                options: [
                    { label: 'A) -h', value: 'A' },
                    { label: 'B) -g', value: 'B' },
                    { label: 'C) -b', value: 'C' },
                    { label: 'D) -r', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "The [blank] tag adds functionality to the 'ls' command that will display the files in chronological order based on their last modified date",
                options: [
                    { label: 'A) -h', value: 'A' },
                    { label: 'B) -t', value: 'B' },
                    { label: 'C) -b', value: 'C' },
                    { label: 'D) -c', value: 'D' }
                ],
                correctAnswer: 'B'
            },
            {
                question: "What is the primary function of the command 'cd'",
                options: [
                    { label: 'A) Changing directories', value: 'A' },
                    { label: 'B) Copying files to a new directory', value: 'B' },
                    { label: 'C) Changing file permissions', value: 'C' },
                    { label: 'D) Removing files', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "What functionality does 'cd -'' provide",
                options: [
                    { label: 'A) Printing the current working directory', value: 'A' },
                    { label: 'B) Changing directory to your home directory', value: 'B' },
                    { label: 'C) Changing to the previous directory you were just in', value: 'C' },
                    { label: 'D) Creates a new directory', value: 'D' }
                ],
                correctAnswer: 'C'
            },
            {
                question: "What is the primary function of the command 'mkdir'",
                options: [
                    { label: 'A) Creates a new directory', value: 'A' },
                    { label: 'B) Recursively deletes all files within a directory', value: 'B' },
                    { label: 'C) Changes the permissions of a directory', value: 'C' },
                    { label: 'D) Outputs a message to the console', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "What functionality does the command 'mkdir -p dir1/dir2' provide",
                options: [
                    { label: 'A) Creates two directories in the same directory', value: 'A' },
                    { label: 'B) Copies the contents of the second directory [dir2] into the first directory [dir1]', value: 'B' },
                    { label: 'C) Removes the content of the second directory [dir2]', value: 'C' },
                    { label: 'D) Creates one directory [dir1] then places the other [dir2] within the first one created', value: 'D' }
                ],
                correctAnswer: 'D'
            },
            {
                question: "What is the primary function of the command 'pwd'",
                options: [
                    { label: 'A) Prints the absolute path to the current working directory', value: 'A' },
                    { label: 'B) Prints the relative path to the current working directory', value: 'B' },
                    { label: 'C) Prints the files within your current directory', value: 'C' },
                    { label: 'D) Changes the permissions for your current directory', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "What is the primary function of the command 'rm'",
                options: [
                    { label: 'A) Restores a moved file to its original directory', value: 'A' },
                    { label: 'B) Removes a file or directory', value: 'B' },
                    { label: 'C) Displays information about a file or directory', value: 'C' },
                    { label: 'D) Display memory statistics', value: 'D' }
                ],
                correctAnswer: 'B'
            },
            {
                question: "Which of the following would, assuming you have administrative privileges, remove every file on a unix system, including system config files",
                options: [
                    { label: 'A) rm -r /', value: 'A' },
                    { label: 'B) rm -r /home/username', value: 'B' },
                    { label: 'C) rm -rf /', value: 'C' },
                    { label: 'D) rm -rf /opt', value: 'D' }
                ],
                correctAnswer: 'C'
            },
            {
                question: "What functionality does the '-i' tag add to the command 'rm'",
                options: [
                    { label: 'A) Asks for confirmation for each deleted file', value: 'A' },
                    { label: 'B) Forces a deletion of files with no warnings or errors', value: 'B' },
                    { label: 'C) Enables a verbose output', value: 'C' },
                    { label: 'D) Copies files to a new location before deleting them', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "What is the primary function of the 'cp' command",
                options: [
                    { label: 'A) Moves the file to a new location', value: 'A' },
                    { label: 'B) Adds default permissions for content protection to the specified file', value: 'B' },
                    { label: 'C) Removes the specified file', value: 'C' },
                    { label: 'D) Copies files to a new location', value: 'D' }
                ],
                correctAnswer: 'D'
            },
            {
                question: "The [blank] tag adds functionality to the 'cp' command that allows the copied files to preserve their attributes (permissions, timestamps, etc)",
                options: [
                    { label: 'A) -c', value: 'A' },
                    { label: 'B) -ap', value: 'B' },
                    { label: 'C) -g', value: 'C' },
                    { label: 'D) -a', value: 'D' }
                ],
                correctAnswer: 'D'
            },
            {
                question: "The correct basic syntax for the ssh command is [blank]",
                options: [
                    { label: 'A) ssh username.serverip', value: 'A' },
                    { label: 'B) ssh username@serverip', value: 'B' },
                    { label: 'C) ssh username--serverip', value: 'C' },
                    { label: 'D) ssh username==serverip', value: 'D' }
                ],
                correctAnswer: 'B'
            },
            {
                question: "Which of the following ssh tags is used to specify the port you wish to connect to",
                options: [
                    { label: 'A) -a', value: 'A' },
                    { label: 'B) -r', value: 'B' },
                    { label: 'C) -p', value: 'C' },
                    { label: 'D) -h', value: 'D' }
                ],
                correctAnswer: 'C'
            },
            {
                question: "Which number is associated with each chmod permission: [blank] for read, [blank] for write, and [blank] for execute",
                options: [
                    { label: 'A) 3,2,2', value: 'A' },
                    { label: 'B) 5,2,1', value: 'B' },
                    { label: 'C) 4,2,1', value: 'C' },
                    { label: 'D) 3,4,1', value: 'D' }
                ],
                correctAnswer: 'C'
            },
            {
                question: "True or false: the sum of the numbers associated with each chmod permission results in a permission code",
                options: [
                    { label: 'A) True', value: 'A' },
                    { label: 'B) False', value: 'B' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "When running the 'echo' command, which symbol enables you to save the output to a file without overwriting the file if it already exists",
                options: [
                    { label: 'A) *', value: 'A' },
                    { label: 'B) >', value: 'B' },
                    { label: 'C) |', value: 'C' },
                    { label: 'D) >>', value: 'D' }
                ],
                correctAnswer: 'D'
            },
            {
                question: "When was UNIX created",
                options: [
                    { label: "A) The early 1950's", value: 'A' },
                    { label: "B) The late 1960's", value: 'B' },
                    { label: 'C) 1991', value: 'C' },
                    { label: 'D) 1982', value: 'D' }
                ],
                correctAnswer: 'B'
            },
            {
                question: "When using vim, how do you force quit the editor without saving",
                options: [
                    { label: "A) :q!", value: 'A' },
                    { label: "B) :q", value: 'B' },
                    { label: 'C) i', value: 'C' },
                    { label: 'D) :w', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "When using emacs, how do you find a specific string of text",
                options: [
                    { label: "A) ctr + s", value: 'A' },
                    { label: "B) ctrl + f", value: 'B' },
                    { label: 'C) ctrl + x', value: 'C' },
                    { label: 'D) ctrl + n', value: 'D' }
                ],
                correctAnswer: 'A'
            },
            {
                question: "When using nano, how do you save the file",
                options: [
                    { label: "A) ctr + s", value: 'A' },
                    { label: "B) ctrl + f", value: 'B' },
                    { label: 'C) ctrl + o', value: 'C' },
                    { label: 'D) ctrl + x', value: 'D' }
                ],
                correctAnswer: 'C'
            }
        ];

//prints questions
function showQuestion() {
    var currentQuestionData = questions[currentQuestion];
    questionNum.innerHTML = "Question " + (currentQuestion + 1) + "/24";
    questionText.innerHTML = currentQuestionData.question;

    if(currentQuestionData.options.length == 4){
        quizContainer.innerHTML = "<input type='radio' name='Answer' value='" + currentQuestionData.options[0].value + "' />" + "<label for='" + currentQuestionData.options[0].value + "'>" + currentQuestionData.options[0].label + "</label><br>";
        quizContainer.innerHTML += "<input type='radio' name='Answer' value='" + currentQuestionData.options[1].value + "' />" + "<label for='" + currentQuestionData.options[1].value + "'>" + currentQuestionData.options[1].label + "</label><br>";
        quizContainer.innerHTML += "<input type='radio' name='Answer' value='" + currentQuestionData.options[2].value + "' />" + "<label for='" + currentQuestionData.options[2].value + "'>" + currentQuestionData.options[2].label + "</label><br>";
        quizContainer.innerHTML += "<input type='radio' name='Answer' value='" + currentQuestionData.options[3].value + "' />" + "<label for='" + currentQuestionData.options[3].value + "'>" + currentQuestionData.options[3].label + "</label><br>";
    } else{
        quizContainer.innerHTML = "<input type='radio' name='Answer' value='" + currentQuestionData.options[0].value + "' />" + "<label for='" + currentQuestionData.options[0].value + "'>" + currentQuestionData.options[0].label + "</label><br>";
        quizContainer.innerHTML += "<input type='radio' name='Answer' value='" + currentQuestionData.options[1].value + "' />" + "<label for='" + currentQuestionData.options[1].value + "'>" + currentQuestionData.options[1].label + "</label><br>";
    }
}

showQuestion();  // Display the first question

//waits for user to press submit to check answer
submitButton.onclick = function () {
    var selectedRadio = document.querySelector('input[name="Answer"]:checked');
    backButton.style.display = "inline-block";

    //makes sure user chose an answer
    if (selectedRadio) {
        var userAnswer = selectedRadio.value;
        var currentQuestionData = questions[currentQuestion];
        
        //if correct
        if (userAnswer == currentQuestionData.correctAnswer) {
            numCorrect++;
            quizContainer.style.color = 'lightgreen';
            console.log("Correct");
        //if incorrect
        } else {
            quizContainer.style.color = 'red';
            console.log("Incorrect");
        }

        submitButton.style.display = "none";
        nextButton.style.display = "inline-block";

        //waits for user to click next to go to the next question
        nextButton.onclick = function () {
            //Checks if user is at the end of the quiz
            if (currentQuestion < questions.length-1) {
                currentQuestion++;
                quizContainer.style.color = 'white';
                nextButton.style.display = "none"
                submitButton.style.display = "inline-block";
                showQuestion();
            } else{
                console.log("Quiz finished. Number of correct answers: " + numCorrect);
                questionNum.innerHTML = "Quiz Complete";
                questionText.innerHTML = numCorrect + "/24 Correct";
                quizContainer.innerHTML = "";
                redoButton.style.display = "inline-block";
                submitButton.style.display = "none";
                nextButton.style.display = "none";
                backButton.style.display = "none";
            }
        }
    } else {
        alert("Please select an answer.");
    }


};

//Allows user to go back a question
backButton.onclick = function () {
    if(currentQuestion > 0){
        currentQuestion--;
        quizContainer.style.color = 'white';
        nextButton.style.display = "none"
        submitButton.style.display = "inline-block";
        showQuestion();
    }
}