import React from 'react';

const MovieList = ({ movies, onMovieSelect }) => {
  return (
    <ul>
      {movies.map((movie) => (
        <li key={movie.imdbID} onClick={() => onMovieSelect(movie.imdbID)}>
          {movie.Title} ({movie.Year}) - IMDb: {movie.imdbID}
        </li>
      ))}
    </ul>
  );
};

export default MovieList;
