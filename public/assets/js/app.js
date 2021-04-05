let getHttpRequest = function () {
    let httpRequest = false

    if (window.XMLHttpRequest) { // Mozilla, Chrome, Safari ...
        httpRequest = new XMLHttpRequest()

        if (httpRequest.overrideMimeType) {
            httpRequest.overrideMimeType('text/xml')
        }
    }
    else if (window.ActiveXObject) { // IE
        try {
            httpRequest = new ActiveXObject("Msxml2.XMLHTTP")
        } catch (error) {
            try {
                httpRequest = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (error) {

            }
        }
    }

    if (!httpRequest) {
        alert('Abandon :( Impossible de créer une instance de XMLHTTP')
        return false
    }

    return httpRequest
}

let httpRequest = getHttpRequest()

const MINUTES = 60
const HOURS = 60 * MINUTES
const DAYS = 24 * HOURS

const elements = {
    days: document.getElementById('days'),
    hours: document.getElementById('hours'),
    minutes: document.getElementById('minutes'),
    seconds: document.getElementById('seconds'),
}

let previousDiff = {}
const countdown = document.querySelector('#countdown')
const launchDate = Date.parse(countdown.dataset.time) / 1000

function refreshCountdown() {
    const difference = launchDate - Date.now() / 1000

    if (difference <= 0) {
        // document.location.reload()
        // return
        elements.days.innerHTML = "00"
        elements.hours.innerHTML = "00"
        elements.minutes.innerHTML = "00"
        elements.seconds.innerHTML = "00"
        return
    }

    const diff = {
        days: Math.floor(difference / DAYS),
        hours: Math.floor(difference % DAYS / HOURS),
        minutes: Math.floor(difference % HOURS / MINUTES),
        seconds: Math.floor(difference % MINUTES)
    }

    updateDOM(diff)

    window.setTimeout(() => { window.requestAnimationFrame(refreshCountdown) }, 1000)
}

function updateDOM(diff) {
    Object.keys(diff).forEach((key) => {
        if (previousDiff[key] != diff[key]) {
            elements[key].innerText = diff[key]
        }
    })

    previousDiff = diff
}

refreshCountdown()
