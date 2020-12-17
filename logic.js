window.addEventListener("load", initSite)
document.getElementById("saveBtn").addEventListener("click", setDate)
document.getElementById("updateBtn").addEventListener("click", updateDate)
document.getElementById("delBtn").addEventListener("click", delDate)


function initSite() {
    getDate()

}

async function delDate() {
    
    const dateTodelete = await makeRequest("./deleteHoroscope.php", "DELETE")
    console.log(dateTodelete)
    var textBox = document.getElementById("dateText")
    textBox.innerText = " ";

}

async function updateDate() {
    const dateToSave = document.getElementById("dateInput").value

    const body = new FormData()
    body.set("date", dateToSave)

    const updateDate = await makeRequest("./updateHoroscope.php", "POST", body)
    console.log(updateDate)
    getDate()



}

async function setDate() {

    const dateToSave = document.getElementById("dateInput").value

    if(!dateToSave.length) {
        console.log("You have to enter a date...")
        return
    }
    
    const body = new FormData()
    body.set("date", dateToSave)

    const collectedDate = await makeRequest("./server/addHoroscope.php", "POST", body)
    console.log(collectedDate)

    getDate()
}

async function getDate() {
    const dateText = document.getElementById("dateText")
    const collectedDate = await makeRequest("./viewHoroscope.php", "GET")
    console.log(collectedDate)

    dateText.innerText = collectedDate
}


async function makeRequest(path, method, body) {
    try {
        const response = await fetch(path, {
            method,
            body
        })
        console.log(response)
        return response.json()
    } catch(err) {
        console.log.error(err)
    }
}