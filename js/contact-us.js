// form submit event handler
const formSubmissionHandler = async (event) => {
  event.preventDefault();

  // get the form attributes from event.target object
  const formElement = event.target,
    body = new FormData(formElement);

  const emailFrom = formElement["email"].value;
  const emailTo = "contact@wisper.ng";

  // clear error or success message
  clearServerResponseMessage();
  // display submission btn text
  displaySubmitButtonMsg();

  try {
    const { isSuccess, message } = await sendEmail(
      formElement,
      body,
      emailFrom,
      emailTo
    );

    // set the form submission response message
    displayServerResponseMessage(isSuccess, message);

    if (isSuccess) {
      removeSubmitButtonMsg();

      // display success modal
      document.getElementById("successBtn").click();

      return formElement.reset();
    }

    // if not successful return the error handler
    return handleFormSubmissionError();
  } catch (error) {
    handleFormSubmissionError();
  }
};

// format errors from api response
const sendEmail = async (formElement, formDataEntries, emailFrom, emailTo) => {
  const emailSubject = formElement["subject"].value;

  let htmlEmailBody = "";

  formDataEntries.forEach(
    (value, key) =>
      (htmlEmailBody += `<p>${key.toUpperCase()}:&nbsp;&nbsp;<b>${value}</b></p>`)
  );

  const res = await Email.send({
    SecureToken: "f000b52d-005c-4adf-bb7f-d9f1be2617db",
    To: emailTo,
    From: emailFrom,
    Subject: `Message from WisperISP Contact Form`,
    Body: htmlEmailBody,
  });

  const isSuccess = res === "OK";

  const message = "Thank you for contacting us. We will get back to you.";

  return {
    isSuccess,
    message,
  };
};

// handle error submission
const handleFormSubmissionError = () => {
  removeSubmitButtonMsg();

  // display custom error message for other api exceptions
  const messageNode = document.getElementById("error");
  messageNode.innerText =
    "Something went wrong, please fill the form fields correctly and try again.";
};

// display server response messages
const displayServerResponseMessage = (isSuccess, message) => {
  const messageHTMLNodeId = isSuccess ? "success" : "error";

  messageNode = document.getElementById(messageHTMLNodeId);
  messageNode.innerText = message;
  // messageNode.style.padding = "10px 0px";
};
// clear server response messages
const clearServerResponseMessage = () => {
  const errorMessageHTMLNodeId = "error";

  document.getElementById(errorMessageHTMLNodeId).innerText = "";
  document.getElementById("success").innerText = "";
};

const displaySubmitButtonMsg = () => {
  const submitBtnID = "submitBtn",
    btn = document.getElementById(submitBtnID);
  btn.innerText = "Please wait...";

  // disable button
  btn.disabled = true;
};

const removeSubmitButtonMsg = () => {
  const submitBtnID = "submitBtn",
    btn = document.getElementById(submitBtnID);
  btn.innerText = "Send Message";
  btn.disabled = false;
};

// main program
const main = () => {
  const formElement = document.querySelector("#form");
  formElement.reset();
  formElement.addEventListener("submit", formSubmissionHandler);
};

main();
