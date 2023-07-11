<?php
require_once 'Subscribed.php';
require_once 'Video.php';
class Visualization{
    private $viewer;
    private $movie;

    public function __construct($inputViewer, $inputMovie){
        $this->setViewer($inputViewer);
        $this->setMovie($inputMovie);
        // adding one more watched video for viewer
        $this->viewer->watchedOneMore();
        // adding one more view for the movie
        $currentViews = $this->movie->getViews();
        $newTotalViews = $currentViews + 1;
        $this->movie->setViews($newTotalViews);
    }

    public function avaliate(){
        // picking the note recived by the viewer, the current note of evaluation and the number of views
        $viewerEvaluation = 5;
        $currentMovieEvaluation = $this->movie->getEvaluation();
        $totalViews = $this->movie->getViews();
        // calculating how much worth the percentage of each note
        $worthPercentage = 1 / $totalViews;
        // calculating the new note of evaluation with base in the current note, viewer note and correlating with the number of views
        $realNoteOfViewer = $worthPercentage * $viewerEvaluation;
        $realCurrentNote = $worthPercentage * ($totalViews - 1) * $currentMovieEvaluation;
        //  $realNoteOfViewer plus $realCurrentNote is the new note of evaluation
        $newMovieEvaluation = $realNoteOfViewer + $realCurrentNote;
        $this->movie->setEvaluation($newMovieEvaluation);
        echo "<br>The movie has been evaluated!!!";
    }

    public function avaliatePerNote($inputNote){
        // picking the note recived by the viewer, the current note of evaluation and the number of views
        $viewerEvaluation = $inputNote;
        $currentMovieEvaluation = $this->movie->getEvaluation();
        $totalViews = $this->movie->getViews();
        // calculating how much worth the percentage of each note
        $worthPercentage = 1 / $totalViews;
        // calculating the new note of evaluation with base in the current note, viewer note and correlating with the number of views
        $realNoteOfViewer = $worthPercentage * $viewerEvaluation;
        $realCurrentNote = $worthPercentage * ($totalViews - 1) * $currentMovieEvaluation;
        //  $realNoteOfViewer plus $realCurrentNote is the new note of evaluation
        $newMovieEvaluation = $realNoteOfViewer + $realCurrentNote;
        $this->movie->setEvaluation($newMovieEvaluation);
        echo "<br>The movie has been evaluated!!!";
    }

    public function avaliatePerPercentage($inputPercentage){
        // picking the percentage recived by the viewer, the current note of evaluation and the number of views
        $viewerEvaluation = $inputPercentage/10;
        $currentMovieEvaluation = $this->movie->getEvaluation();
        $totalViews = $this->movie->getViews();
        // calculating how much worth the percentage of each note
        $worthPercentage = 1 / $totalViews;
        // calculating the new note of evaluation with base in the current note, viewer note and correlating with the number of views
        $realNoteOfViewer = $worthPercentage * $viewerEvaluation;
        $realCurrentNote = $worthPercentage * ($totalViews - 1) * $currentMovieEvaluation;
        //  $realNoteOfViewer plus $realCurrentNote is the new note of evaluation
        $newMovieEvaluation = $realNoteOfViewer + $realCurrentNote;
        $this->movie->setEvaluation($newMovieEvaluation);
        echo "<br>The movie has been evaluated!!!";
    }

    // these 2 functions are only for test on the comparison with the previous 3 on the number of lines of code written
    public function avaliateNoDuplaction($inputNote){
        $this->calculateEvaluationNote($inputNote);
        echo "<br>The movie has been evaluated!!!";
    }
    private function calculateEvaluationNote($noteRecived){
        // picking the percentage recived by the viewer, the current note of evaluation and the number of views
        $viewerEvaluation = $noteRecived;
        $currentMovieEvaluation = $this->movie->getEvaluation();
        $totalViews = $this->movie->getViews();
        // calculating how much worth the percentage of each note
        $worthPercentage = 1 / $totalViews;
        // calculating the new note of evaluation with base in the current note, viewer note and correlating with the number of views
        $realNoteOfViewer = $worthPercentage * $viewerEvaluation;
        $realCurrentNote = $worthPercentage * ($totalViews - 1) * $currentMovieEvaluation;
        //  $realNoteOfViewer plus $realCurrentNote is the new note of evaluation
        $newMovieEvaluation = $realNoteOfViewer + $realCurrentNote;
        $this->movie->setEvaluation($newMovieEvaluation);
    }

    /**
     * Get the value of viewer
     */ 
    public function getViewer()
    {
        return $this->viewer;
    }

    /**
     * Set the value of viewer
     *
     * @return  self
     */ 
    public function setViewer($viewer)
    {
        $this->viewer = $viewer;

        return $this;
    }

    /**
     * Get the value of movie
     */ 
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * Set the value of movie
     *
     * @return  self
     */ 
    public function setMovie($movie)
    {
        $this->movie = $movie;

        return $this;
    }
}
?>