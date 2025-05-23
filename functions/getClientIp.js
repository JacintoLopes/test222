// netlify/functions/getClientIp.js
exports.handler = async (event) => {
  // Netlify passe l'IP d'origine dans x-forwarded-for
  const forwarded = event.headers['x-forwarded-for'] || '';
  const ip = forwarded.split(',')[0].trim() || 'IP non disponible';
  return {
    statusCode: 200,
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ ip })
  };
};
