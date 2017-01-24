<?php

class VideoPlayer {
    public function play()
    {
    }
}

class AviVideoPlayer extends VideoPlayer() {
    public function play($file)
    {
        // if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
        //     throw new Exception; // violates the LSP; the input/outputs is different
        // }
    }
}