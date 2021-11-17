// form submit event handler
const formSubmissionHandler = async (event) => {
  event.preventDefault();

  // get the form attributes from event.target object
  const formElement = event.target,
    body = new FormData(formElement);

  const emailFrom = formElement["email"].value;
  const emailTo = "wisperng@gmail.com";

  // clear error or success message
  clearServerResponseMessage();
  // display submission btn text
  displaySubmitButtonMsg();

  try {
    if (isValidSubmission(formElement)) {
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
      }

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
  // check if subscription form
  const isSubscribeForm = document.getElementsByName("plan")[0];

  const emailSubject = isSubscribeForm
    ? "Data Plan Subscription Request From WISPER NG"
    : "Message from WisperISP Contact Form";

  let htmlEmailBody = "";

  formDataEntries.forEach(
    (value, key) =>
      (htmlEmailBody += `<p>${key.toUpperCase()}:&nbsp;&nbsp;<b>${value}</b></p>`)
  );

  const res = await Email.send({
    SecureToken: "0608d053-abc9-40aa-b255-0129336f245b",
    To: emailTo,
    From: emailFrom,
    Subject: emailSubject,
    Body: htmlEmailBody,
  });

  const isSuccess = res === "OK";

  const message = isSubscribeForm
    ? "Thank you for subscribing to our plan, our team will reach out to you with more information."
    : "Thank you for contacting us. We will get back to you.";

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

const isValidSubmission = (formElement) => {
  // check if subscription form
  const isSubscribeForm = document.getElementsByName("plan")[0];

  if (isSubscribeForm) {
    return isValidSubscriptionSubmission(formElement);
  }
  return (
    formElement["name"].checkValidity() &&
    formElement["message"].checkValidity() &&
    formElement["email"].checkValidity()
  );
};

const isValidSubscriptionSubmission = (formElement) =>
  formElement["name"].checkValidity() &&
  formElement["phone"].checkValidity() &&
  formElement["state"].checkValidity() &&
  formElement["lga"].checkValidity() &&
  formElement["city"].checkValidity() &&
  formElement["plan"].checkValidity() &&
  formElement["email"].checkValidity();

// main program
const main = () => {
  const formElement = document.querySelector("#form");
  formElement.reset();
  formElement.addEventListener("submit", formSubmissionHandler);
};

main();
