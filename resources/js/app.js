if (document.readyState === "loading") {
    // Loading hasn't finished yet
    document.addEventListener("DOMContentLoaded", initScript);
} else {
    // `DOMContentLoaded` has already fired
    initScript();
}

function initScript() {
    document.getElementById('nav-toggle').onclick = function () {
        document.getElementById("nav-content").classList.toggle("hidden");
        document.getElementById("close").classList.toggle("hidden");
        document.getElementById("hamburger").classList.toggle("hidden");
    }

    handleWeightSection();
    handleArithmeticSection();
    handleSquareSection();
    handleGeometricSection();
    handleHarmonicSection();
    handleMedianSection();
}

// Funkcja pomocnicza do wywoływania funkcji odpowiedzialnych za obliczenia
function addEventListenerToElement(element, event, callback) {
    if (element) {
        element.addEventListener(event, callback);
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "weight"
function handleWeightSection() {
    let weightSection = document.querySelector('.weight');
    if (weightSection) {
        weight()
        document.querySelector(".weight .add").addEventListener('click', function (e) {
            document.querySelector('.weight .inputs').insertAdjacentHTML('beforeend', '<label class="text-right"><input type="number" class="w-10/12 values"></label>\n' +
                '            <label><input type="number" class="w-10/12 weights">\n' +
                '                <span class="text-red-400 p-3 text-xl font-bold hover:cursor-pointer hover:text-red-600 absolute remove">x</span>\n' +
                '            </label>')

            weight();
        });

        addEventListenerToElement(weightSection.querySelector('select'), 'input', function () {
            weightedAverageCalculate();
        });
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "arithmetic"
function handleArithmeticSection() {
    let arithmeticSection = document.querySelector('.arithmetic');
    if (arithmeticSection) {
        addEventListenerToElement(arithmeticSection.querySelector('textarea'), 'input', function () {
            arithmetic();
        });
        addEventListenerToElement(arithmeticSection.querySelector('select'), 'input', function () {
            arithmetic();
        });
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "square"
function handleSquareSection() {
    let squareSection = document.querySelector('.square');
    if (squareSection) {
        addEventListenerToElement(squareSection.querySelector('textarea'), 'input', function () {
            square();
        });
        addEventListenerToElement(squareSection.querySelector('select'), 'input', function () {
            square();
        });
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "geometric"
function handleGeometricSection() {
    let geometricSection = document.querySelector('.geometric');
    if (geometricSection) {
        addEventListenerToElement(geometricSection.querySelector('textarea'), 'input', function () {
            geometric();
        });
        addEventListenerToElement(geometricSection.querySelector('select'), 'input', function () {
            geometric();
        });
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "harmonic"
function handleHarmonicSection() {
    let harmonicSection = document.querySelector('.harmonic');
    if (harmonicSection) {
        addEventListenerToElement(harmonicSection.querySelector('textarea'), 'input', function () {
            harmonic();
        });
        addEventListenerToElement(harmonicSection.querySelector('select'), 'input', function () {
            harmonic();
        });
    }
}

// Funkcja odpowiedzialna za obsługę sekcji "median"
function handleMedianSection() {
    let medianSection = document.querySelector('.median');
    if (medianSection) {
        addEventListenerToElement(medianSection.querySelector('textarea'), 'input', function () {
            median();
        });
    }
}

function arithmetic() {
    let textarea = document.querySelector('.arithmetic textarea');
    let select = document.querySelector('.arithmetic select');
    let result = document.querySelector('.arithmetic .result');

    if (textarea && select && result) {
        let numbers = getNumbers(textarea.value);
        let sum = numbers.reduce((partialSum, a) => partialSum + a, 0);
        let precision = select.value;
        result.innerHTML = (sum / numbers.length).toFixed(precision);
    }
}

function getNumbers(numbers) {

    return numbers.replace(/(?:\r|\n|\r\n)/g, ';')
        .replace(/\s/g, "")
        .split(';')
        .filter(n => n)
        .map(n => Number(n.replace(",", ".")))
}

function geometric() {
    let textarea = document.querySelector('.geometric textarea');
    let select = document.querySelector('.geometric select');
    let result = document.querySelector('.geometric .result');

    if (textarea && select && result) {
        let numbers = getNumbers(textarea.value);
        let sum = numbers.reduce((partial, a) => partial * a);
        let precision = select.value;
        result.innerHTML = Math.pow(sum, 1 / numbers.length).toFixed(precision);
    }
}

function harmonic() {
    let textarea = document.querySelector('.harmonic textarea');
    let select = document.querySelector('.harmonic select');
    let result = document.querySelector('.harmonic .result');

    if (textarea && select && result) {
        let numbers = getNumbers(textarea.value);
        let sum = 0;
        let n = numbers.length;

        for (let i = 0; i < n; i++) {
            sum = sum + (1 / numbers[i]);
        }

        result.innerHTML = (n / sum).toFixed(select.value);
    }
}

function median() {
    let textarea = document.querySelector('.median textarea');
    let result = document.querySelector('.median .result');

    if (textarea && result) {
        let numbers = getNumbers(textarea.value);

        if (numbers.length === 0) {
            result.innerHTML = 0;
            return;
        }

        numbers.sort((a, b) => Number(a) - Number(b));

        let midpoint = Math.floor(numbers.length / 2);
        result.innerHTML = numbers.length % 2 === 1 ?
            numbers[midpoint] :
            (numbers[midpoint - 1] + numbers[midpoint]) / 2;
    }
}

function weightedAverageCalculate() {
    let values = [];
    let weights = [];
    let i = 0;
    let j = 0;

    let valueInputs = document.querySelectorAll('.weight input.values');
    let weightInputs = document.querySelectorAll('.weight input.weights');

    valueInputs.forEach(function (input) {
        values[i++] = input.value;
    });

    weightInputs.forEach(function (input) {
        weights[j++] = input.value;
    });

    let numerators = 0;
    let denominator = 0;

    for (let n = 0; n < values.length; n++) {
        if (values[n] !== '' && weights[n] !== '') {
            let weight = parseFloat(weights[n]);
            numerators += parseFloat(values[n]) * weight;
            denominator += weight;
        }
    }

    let weightedAverage = (numerators / denominator).toFixed(
        document.querySelector('.weight select').value
    );

    if (isNaN(weightedAverage)) {
        weightedAverage = 0;
    }

    let result = document.querySelector('.weight .result');
    if (result) {
        result.innerHTML = weightedAverage;
    }
}

function weight() {
    const inputs = document.querySelectorAll('.weight input');

    inputs.forEach(function (input) {
        input.removeEventListener('input', weightedAverageCalculate);
        input.addEventListener('input', weightedAverageCalculate);
    });

    let removeButtons = document.querySelectorAll('.weight .remove');
    removeButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            let parent = this.parentElement;
            parent.previousElementSibling.remove();
            parent.remove();
            weightedAverageCalculate();
        });
    });
}

function square() {
    let textarea = document.querySelector('.square textarea');
    let select = document.querySelector('.square select');
    let result = document.querySelector('.square .result');

    if (textarea && select && result) {
        let numbers = getNumbers(textarea.value);
        let sum = 0;
        let n = numbers.length;

        for (let i = 0; i < n; i++) {
            sum = sum + Math.pow(numbers[i], 2);
        }

        let precision = select.value;

        result.innerHTML = (Math.sqrt(sum / n)).toFixed(precision);
    }
}

