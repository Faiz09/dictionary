Define 
--

A command line dictionary. **[oxford dictionary]**

how it works?
    
    $ define hello
    
    Meanings:
    1: used as a greeting or to begin a telephone conversation
    2: an utterance of ‘hello’; a greeting
    3: say or shout ‘hello’
    
    
Adding define command to terminal:

add the following to the end of `~/.bashrc` file

    export PATH=$HOME/lab/dictionary:$PATH
    alias define='define.php'
    
 replace `/lab/dictionary` with actual path on disk
