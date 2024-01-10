import React from 'react';

const MovieDetails = ({ details }) => {
  return (
    <div className="movie-details">
      <img src={details.Poster} alt="Poster" />
      <div className="movie-info">
        <h2>{details.Title}</h2>
        <p>Release: {details.Released}</p>
        <p>Duración: {details.Runtime}</p>
        <p>Genero: {details.Genre}</p>
        <p>IMDb Rating: {details.imdbRating}</p>
        <p>Descripción: {details.Plot}</p>
      </div>
    </div>
  );
};

export default MovieDetails;
