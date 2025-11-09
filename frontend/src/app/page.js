"use client";

import { gql } from "@apollo/client";
import { useQuery } from "@apollo/client/react/hooks";

const GET_POSTS = gql`
  query {
    posts {
      nodes {
        id
        title
      }
    }
  }
`;

export default function HomePage() {
  const { data, loading, error } = useQuery(GET_POSTS);

  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error: {error.message}</p>;

  return (
    <div>
      <h1>Posts</h1>
      {data.posts.nodes.map((p) => (
        <div key={p.id}>{p.title}</div>
      ))}
    </div>
  );
}
