export const cookies = (() => {

  const body = document.body;

  const _setCookie = (cookieName, cookieValue, cookieExpirationDays) => {
    const date = new Date();
    date.setTime(date.getTime() + (cookieExpirationDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
  }

  const _getCookie = (cookieName) => {
    const value = "; " + document.cookie;
    const parts = value.split("; " + cookieName + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
  }

  const setCookieConsent = () => {
    _setCookie("cookieConsent", "yes", 30);
    body.classList.remove('showCookieConsent');
  }

  const showCookieConsent = () => {
    const consentCookie = _getCookie("cookieConsent");
    console.log("showCookieConsent is running...consentCookie is", consentCookie);
    consentCookie === "yes" && body.classList.remove('showCookieConsent');
  }

  return {
    setCookieConsent: setCookieConsent,
    showCookieConsent: showCookieConsent
  };

})();