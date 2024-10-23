<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd Exercise</title>
</head>
<body>

<h1>3rd Exercise: Reverse Words in Sentences</h1>
<form method="post">
    <textarea name="paragraph" placeholder="Enter your paragraph here..."></textarea>
    <button type="submit">Process</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputParagraph = $_POST['paragraph'] ?? '';
        $output = reverseWordsInSentences($inputParagraph);
        
        echo "<div class='result'>Output: " . htmlspecialchars($output) . "</div>";
    }

    function reverseWordsInSentences($paragraph) {
        // Split the paragraph into sentences
        $sentences = preg_split('/(?<=[.!?])\s+/', $paragraph);
        
        // Initialize an array to hold reversed sentences
        $reversedSentences = [];

        foreach ($sentences as $sentence) {
            // Trim the sentence to remove extra whitespace
            $sentence = trim($sentence);
            
            // Split the sentence into words
            $words = explode(' ', $sentence);
            
            // Reverse the order of words
            $reversedWords = array_reverse($words);
            
            // Join the reversed words back into a sentence
            $reversedSentence = implode(' ', $reversedWords);
            
            // Add the reversed sentence to the array
            $reversedSentences[] = $reversedSentence;
        }
        
        // Join all reversed sentences into a single string
        $result = implode(' ', $reversedSentences);
        
        return $result;
    }
    ?>

</body>
</html>
