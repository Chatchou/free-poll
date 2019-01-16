var number = 0;
function createfrage(question_number) {
    return '<label>\n' +
        '   Unbetitle             Frage' + question_number + ': <input type="text" class="bigger_width_question" name="question' + question_number + '">\n' +
        '            </label>' +
        '  <textarea rows="4" rows="50" class="antwort" placeholder="Schreiben Sie eine Antwort"></textarea>';
}

function binerFrage(question_number) {
    return '<label>\n' +
        ' Unbetitle Frage' + question_number + ': <input type="text" class="bigger_width_question" name="question' + question_number + '">\n' +
        '            </label>' +
        '<div>' + '<input type="radio" id="scales" class="binaer" name="scales">' + '<label>' + 'ja' + '</label>' +
        '<input type="radio" id="scales" class="binaer" name="scales">' + '<label>' + 'nein' + '</label>' +
        '</div>'
}


function datumfrage(question_number) {
    return '<label>\n' +
        '      Unbetitle   Frage' + question_number + ': <input type="text" class="bigger_width_question" name="question' + question_number + '">\n' +
        '            </label>' +
        '<div>' + '<input type="date" id="start" class="date_input" name="trip-start"' + '</div>';

}
function kurzantwort(question_number) {
    return '<label>\n' +
        '      Unbetitle   Frage' + question_number + ': <input type="text" class="bigger_width_question" name="question' + question_number + '">\n' +
        '            </label>' +
        '  <textarea rows="2" rows="25" class="antwort" placeholder="Schreiben Sie eine Antwort"></textarea>';
}
function getNumber() {
    number++;
    return number;
}



function toggleAddQuestionPopup() {
    var popUp = document.getElementById('addQuestionPopup');

    if (popUp.style.display === 'inline-block') {
        popUp.style.display = 'none';
    } else {
        popUp.style.display = 'inline-block';
    }
}



function addSatzfrage() {
    toggleAddQuestionPopup();

    var question_number = getNumber();

    var satzfrage = document.createElement('div');
    satzfrage.setAttribute("id", "satzfrage" + question_number);
    satzfrage.setAttribute("class", "question");
    satzfrage.innerHTML = createfrage(question_number);
    var before = document.getElementById('insert_questions_before_me');
    before.parentNode.insertBefore(satzfrage, before);


}


function addkurzantwort() {
    toggleAddQuestionPopup();

    var question_number = getNumber();

    var kurzant = document.createElement('div');
    kurzant.setAttribute("id", "kurzant" + question_number);
    kurzant.setAttribute("class", "question");
    kurzant.innerHTML = kurzantwort(question_number);
    var before = document.getElementById('insert_questions_before_me');
    before.parentNode.insertBefore(kurzant, before);



}


function addBinaerfrage() {
    toggleAddQuestionPopup();


    var question_number = getNumber();

    var binaerfrage = document.createElement('div');
    binaerfrage.setAttribute("id", "binaerfrage" + question_number);
    binaerfrage.setAttribute("class", "question");
    binaerfrage.innerHTML = binerFrage(question_number);
    var before = document.getElementById('insert_questions_before_me');
    before.parentNode.insertBefore(binaerfrage, before);
}


function adddatumfrage() {
    toggleAddQuestionPopup();

    var question_number = getNumber();

    var datefrage = document.createElement('div');
    datefrage.setAttribute("id", "datumfrage" + question_number);
    datefrage.setAttribute("class", "question");
    datefrage.innerHTML = datumfrage(question_number);
    var before = document.getElementById('insert_questions_before_me');
    before.parentNode.insertBefore(datefrage, before);

}


function addWortfrage() {
    alert("wort frage geclickt");
}
