const paragraphs = [
	"gago ampota tangina ka hayop kang nilalang ka papa mo kasi blue at mama mo may isda sa kamay nawala sa kalsada nabunggo ng riles pati ng bato kasama na ang papa mong kalbo nangisay nagwala nalasing napapagod nagmumura pero nagmamahal parin natuto na hahaha ayoko na mabuhay pang muli san ba to patungo hindi ko na kasi alam",
	"pinipiwit piwit talaga sa buong kasaysayan baka idol ko yan pre tama na kasi iyong pagdudusa sa ilalim ng puting ilaw at sa liwanag ng kalawang ikaw ay masasalba sa ngalan ng ama ng anak at ni pwet ni chris tiu amen amen bola pre potangina mo pag di mo binigay susumbong kita kay andrew tate hahaha totoo nga ang nararamdanan ko pero tanga ka na ba",
	"hay nako may pagasa ba sa iyong puso sa puso at kaluluwa mo lang matatagpuan ang lahat ng kamalasan hayop ka itigil mo na kasi ang iyong kahibangan at pagpatuloy mo ang iyong kinagigiliwan prinoprotekahan walang kasinungalingan serbisyong totoo lamang hind ako natutulog nagshashabu kasi si mike enriquez sa ibabaw ng kalangitan patungo kila satanas pre limahan walang tawagan nanay",
	];

const typingText = document.querySelector(".typing-text p")
const inpField = document.querySelector(".wrapper .input-field")
const tryAgainBtn = document.querySelector(".wrapper button")
const timeTag = document.querySelector(".time span b")
const mistakeTag = document.querySelector(".mistake span")
const wpmTag = document.querySelector(".wpm span")
const cpmTag = document.querySelector(".cpm span")

let timer;
let maxTime = 60;
let timeLeft = maxTime;
let charIndex = mistakes = isTyping = 0;

function loadParagraph() {
    const ranIndex = Math.floor(Math.random() * paragraphs.length);
    typingText.innerHTML = "";
    paragraphs[ranIndex].split("").forEach(char => {
        console.log(char);
        let span = `<span>${char}</span>`
        typingText.innerHTML += span;
    });
    typingText.querySelectorAll("span")[0].classList.add("active");
    document.addEventListener("keydown", () => inpField.focus());
    typingText.addEventListener("click", () => inpField.focus());
}

function initTyping() {
    let characters = typingText.querySelectorAll("span");
    let typedChar = inpField.value.split("")[charIndex];
    if (charIndex < characters.length - 1 && timeLeft > 0) {
        if (!isTyping) {
            timer = setInterval(initTimer, 1000);
            isTyping = true;
        }
        if (typedChar == null) {
            if (charIndex > 0) {
                charIndex--;
                if (characters[charIndex].classList.contains("incorrect")) {
                    mistakes--;
                }
                characters[charIndex].classList.remove("correct", "incorrect");
            }
        } else {
            if (characters[charIndex].innerText == typedChar) {
                characters[charIndex].classList.add("correct");
            } else {
                mistakes++;
                characters[charIndex].classList.add("incorrect");
            }
            charIndex++;
        }
        characters.forEach(span => span.classList.remove("active"));
        characters[charIndex].classList.add("active");

        let wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
        wpm = wpm < 0 || !wpm || wpm === Infinity ? 0: wpm;

        wpmTag.innerText = wpm;
        mistakeTag.innerText = mistakes;
        cpmTag.innerText = charIndex - mistakes;
    } else {
        clearInterval(timer);
        inpField.value = "";
    }
}

function initTimer() {
    if (timeLeft > 0) {
        timeLeft--;
        timeTag.innerText = timeLeft;
        let wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
        wpmTag.innerText = wpm;
    } else {
        clearInterval(timer);
    }
}

function resetGame() {
    loadParagraph();
    clearInterval(timer);
    timeLeft = maxTime;
    charIndex = mistakes = isTyping = 0;
    inpField.value = "";
    timeTag.innerText = timeLeft;
    wpmTag.innerText = 0;
    mistakeTag.innerText = 0;
    cpmTag.innerText = 0;
}

loadParagraph();
inpField.addEventListener("input", initTyping);
tryAgainBtn.addEventListener("click", resetGame);