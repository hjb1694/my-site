const dynamicWord = document.querySelector('.hero__content p');
const words = ['Strength', 'Skill', 'Excellence', 'Success'];
let seq = 0;

dynamicWord.textContent = words[0];

setInterval(() => {
    if(seq < (words.length - 1)){
        seq++;
    }else{
        seq = 0;
    }

    dynamicWord.textContent = words[seq];
}, 2500);
