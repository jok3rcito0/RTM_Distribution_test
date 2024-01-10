import React, { useState } from 'react';
import SearchBar from './components/SearchBar';
import MovieList from './components/MovieList';
import MovieDetails from './components/MovieDetails';
import './styles.css';

const App = () => {
  const [searchResults, setSearchResults] = useState([]);
  const [selectedMovie, setSelectedMovie] = useState(null);

  const handleSearch = (searchTerm) => {
    fetch(`http://backend.test/index.php?searchTerm=${searchTerm}`)
      .then((response) => response.json())
      .then((data) => {
        setSearchResults(data.Search || []);
      })
      .catch((error) => console.error('Error fetching data:', error));
  };

  const handleMovieSelect = (movieId) => {
    fetch(`http://backend.test/index.php?movieId=${movieId}`)
      .then((response) => response.json())
      .then((data) => setSelectedMovie(data))
      .catch((error) => console.error('Error fetching movie details:', error));
  };

  return (
    <div className="container">
      <SearchBar onSearch={handleSearch} />
      <div className="content-container">
        <MovieList movies={searchResults} onMovieSelect={handleMovieSelect} />
        {selectedMovie && <MovieDetails details={selectedMovie} />}
      </div>
    </div>
  );
};

export default App;
