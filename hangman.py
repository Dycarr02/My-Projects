import random

def display_hangman(tries):
    stages = [
        '''
          --------
          |      |
          |      O
          |     \\|/
          |      |
          |     / \\
          -
        ''',
        '''
          --------
          |      |
          |      O
          |     \\|/
          |      |
          |     / 
          -
        ''',
        '''
          --------
          |      |
          |      O
          |     \\|/
          |      |
          |      
          -
        ''',
        '''
          --------
          |      |
          |      O
          |     \\|
          |      |
          |      
          -
        ''',
        '''
          --------
          |      |
          |      O
          |      |
          |      |
          |      
          -
        ''',
        '''
          --------
          |      |
          |      O
          |      
          |      
          |      
          -
        ''',
        '''
          --------
          |      |
          |      
          |      
          |      
          |      
          -
        '''
    ]
    return stages[6 - tries]

def hangman():
    word_list = ["school", "boy", "glasses", "dog", "hangman"]
    word = random.choice(word_list)
    guessed = "_" * len(word)
    guessed_list = list(guessed)
    letter_guessed = []
    tries = 6
    
    print("Let's play Hangman!")
    print(display_hangman(tries))
    print(guessed)
    print("\n")
    
    while tries > 0 and "_" in guessed:
        guess = input("Please guess a letter: ").lower()
        
        if len(guess) == 1 and guess.isalpha():
            if guess in letter_guessed:
                print("You already guessed this letter.")
            elif guess not in word:
                print("Wrong guess.")
                tries -= 1
                letter_guessed.append(guess)
            else:
                print("Good guess!")
                for index in range(len(word)):
                    if word[index] == guess:
                        guessed_list[index] = guess
                guessed = "".join(guessed_list)
                letter_guessed.append(guess)
                
        else:
            print("Please enter a valid character.")
            
        print(display_hangman(tries))
        print(guessed)
        print("\n")
        
    if "_" not in guessed:
        print("Congrats, you won!")
    else:
        print("Out of tries. The word was " + word + ". Better luck next time.")

if __name__ == "__main__":
    hangman()
